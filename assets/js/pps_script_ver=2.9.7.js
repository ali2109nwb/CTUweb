ppsEmbedObject = {};

jQuery(document).ready(function ($) {

  var formClass = {
    jetPack: '.contact-form-submission',
    gravityForms: '.gform_wrapper .validation_error, .gform_confirmation_message',
    contactForms: '.wpcf7-validation-errors, .wpcf7-mail-sent-ok'
  };
  jQuery('.pps-popup').each(function (index, element) {
    var data = jQuery(this).data('popuppress');
    // Remove Duplicate Popups IDs
    var ids = jQuery('[id=\'' + this.id + '\']');
    if (ids.length > 1) {
      ids.slice(1).remove();
    }

    var idPopup = jQuery(this).attr('id').replace('popuppress-', '');
    var popup = jQuery("#popuppress-" + idPopup);

    //Pause autoplay wp videos
    var $wp_video = popup.find('.wp-video');
    if ($wp_video.length) {
      if ($wp_video.find('video').first().attr('autoplay') !== undefined) {
        $wp_video.find('video').trigger('pause');
      }
    }

    //Solución a los mensajes al enviar formularios
    if (jQuery(this).find(formClass.jetPack + ',' + formClass.gravityForms + ',' + formClass.contactForms).length) {
      jQuery(document).ready(function () {
        if (jQuery('.pps-button-popup-' + idPopup).length) {
          jQuery('.pps-button-popup-' + idPopup).trigger('click');
        }
        else if (jQuery('a[href*="pps-button-popup-' + idPopup + '"]').length) {
          jQuery('a[href*="pps-button-popup-' + idPopup + '"]').trigger('click');
        } else if (data.class_run && jQuery('.' + data.class_run).length) {
          jQuery('.' + data.class_run).trigger('click');
        }
      });
    }
  });

  //Fix Close Multiple Popups
  jQuery('.pps-popup .pps-btn').on('click', function (e) {
    e.preventDefault();
    idPopupParent = jQuery(this).closest('.pps-popup').attr('id').replace(/[^0-9\.]/g, '');
    //jQuery('#popuppress-'+idPopupParent).bPopup().close(); //No cerrar el popup padre
  });

  //Restore views Popups
  jQuery('a.restore-views').on('click', function (e) {
    e.preventDefault();
    idPopup = jQuery(this).attr('href').replace('?popup_id=', '');
    if (confirm("Really you want restore values?"))
      updateViewsPopupPress(idPopup, "restore");
  });

  //Custom Next/Prev Slide
  jQuery('a.pps-go-slide').on('click', function (e) {
    e.preventDefault();
    var $direction_nav = $(this).closest('.pps-wrap').find('.pps-direction-nav');
    if ($(this).hasClass('pps-go-next-slide')) {
      $direction_nav.find('.pps-nav-next .pps-next').trigger('click');
    } else {
      $direction_nav.find('.pps-nav-prev .pps-prev').trigger('click');
    }
  });

  $(window).on("resize", function (event) {
    var popup = jQuery('.pps-popup').last();
    if (popup.css('display') == 'block') {
      var id = popup.attr('id').replace('popuppress-', '');
      manageResponsiveVideoPopupPress(id);
      //Para redimensionar contenidos cuando se redimensiona la pantalla
      manageHeightsPopupPress(id, '.pps-embed', 100);
      manageHeightsPopupPress(id, '.pps-iframe', 100);
      manageHeightsPopupPress(id, '.pps-pdf', 100);
    }
  });
});

function closePopupPress(id) {
  var popup = jQuery("#popuppress-" + id);
  if( popup.length && popup.is(':visible') ){
    popup.bPopup().close();
  }
}

function onStartSliderPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);
  if (popup.find('.popupslider').length) {
    lazyLoadContentPopupPress(id);
  }

}

function beforeSliderPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);

  setHeightContentPopupPress(id);

  removeLazyLoadContentPopupPress(id);
}

function afterSliderPopupPress(id, pps_popup) {
  var popup = jQuery("#popuppress-" + id);
  lazyLoadContentPopupPress(id);

  pps_popup.reposition(180);
}

function openedPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);

  //Reposicionamos el mensaje Ok para los formularios
  var formClass = {
    jetPack: '.contact-form-submission',
    gravityForms: '.gform_wrapper .validation_error, .gform_confirmation_message',
    contactForms: '.wpcf7-validation-errors, .wpcf7-mail-sent-ok'
  };
  //Solución a los mensajes al enviar formularios
  if (popup.find(formClass.jetPack + ',' + formClass.gravityForms + ',' + formClass.contactForms).length) {
    repositionPopupPress(id);
  }
}

function onOpenPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);
  var pps_data = popup.data('popuppress');

  manageResponsiveVideoPopupPress(id);

  popup.find('video,audio').trigger('pause');

  //Agregamos clase pps-mobile cuando estamos en un dispositivo movil
  if (isMobile.any) {
    popup.addClass('pps-mobile');
  }

  lazyLoadContentPopupPress(id);

  if (pps_data.close_mouseleave == 'true') {
    popup.mouseleave(function () {
      popup.bPopup().close();
      jQuery('.b-modal').remove();
      removeLazyLoadContentPopupPress(id);
    });
  }

  //Movemos las flechas fuera de .pps-content porque el overflow=auto las oculta
  if (popup.find('.pps-direction-nav').length) {
    popup.find('.pps-wrap').append(popup.find('.pps-direction-nav'));
  }
  if (popup.find('.pps-control-nav').length) {
    popup.find('.pps-wrap').append(popup.find('.pps-control-nav'));
  }

  //Actualizar vistas
  updateViewsPopupPress(id);

  //Open event for users
  popup.trigger("ppsOnOpen");
}

function manageResponsiveVideoPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);
  var device_width = jQuery(window).width();
  var $wp_video = popup.find('.wp-video');
  if ($wp_video.length) {
    if (device_width <= $wp_video.width()) {
      $wp_video.addClass('pps-responsive-video');
    } else {
      $wp_video.removeClass('pps-responsive-video');
    }
    if ($wp_video.find('video').first().attr('autoplay') !== undefined) {
      setTimeout(function () {
        $wp_video.find('video').trigger('play');
      }, 50);
    }
  }
}

function lazyLoadSliderImagesPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);
  if (popup.find('.pps-content').hasClass('pps-images-loaded')) {
    return;
  }
  var $items = popup.find('.pps-img-slider');
  $items.each(function (index, el) {
    jQuery(el).attr('src', jQuery(el).closest('.pps-item-content').data('src'));
  });
  popup.find('.pps-content').addClass('pps-images-loaded');
}

function lazyLoadContentPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);
  var $li;
  if (popup.find('.pps-single-popup').length) {
    $li = popup.find('.pps-single-popup > li');
  } else {
    $li = popup.find('.popupslider > ul > li.pps-active-slide');
  }

  if ($li.find('.pps-embed').length && !$li.find('.pps-embed').hasClass('pps-embed-loaded')) {
    lazyLoadEmbedPopupPress($li);
  }
  if ($li.find('.pps-iframe').length && !$li.find('.pps-iframe').hasClass('pps-iframe-loaded')) {
    lazyLoadIframePopupPress($li);
  }
  if ($li.find('.pps-pdf').length && !$li.find('.pps-pdf').hasClass('pps-pdf-loaded')) {
    lazyLoadPdfPopupPress($li);
  }

}

function removeLazyLoadContentPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);
  var $li;
  if (popup.find('.pps-single-popup').length) {
    $li = popup.find('.pps-single-popup > li');
  } else {
    $li = popup.find('.popupslider > ul > li.pps-active-slide');
  }

  if ($li.find('.pps-embed').length) {
    removeLazyLoadEmbedPopupPress($li, id);
  }
  if ($li.find('.pps-iframe').length) {
    removeLazyLoadIframePopupPress($li, id);
  }
  if ($li.find('.pps-pdf').length) {
    //console.log('remove pdf');
  }
}

function lazyLoadEmbedPopupPress($li) {
  var $pps_embed = $li.find('.pps-embed');
  $pps_embed.append('<span class="pps-loading">' + PPS.loader_text + '</span>');
  $pps_embed.find('iframe').first().attr('src', $pps_embed.data('src'));
  $pps_embed.addClass('pps-embed-loaded');
  setTimeout(function () {
    $pps_embed.find('.pps-loading').remove();
  }, 5000);
}

function lazyLoadIframePopupPress($li) {
  var $pps_iframe = $li.find('.pps-iframe');
  $pps_iframe.append('<span class="pps-loading">' + PPS.loader_text + '</span>');
  $pps_iframe.find('iframe').first().attr('src', $pps_iframe.data('src'));
  $pps_iframe.addClass('pps-iframe-loaded');
  setTimeout(function () {
    $pps_iframe.find('.pps-loading').remove();
  }, 5000);
}

function lazyLoadPdfPopupPress($li) {
  var $pps_pdf = $li.find('.pps-pdf');
  $pps_pdf.append('<span class="pps-loading">' + PPS.loader_text + '</span>');
  $pps_pdf.find('iframe').first().attr('src', '//docs.google.com/gview?embedded=true&url=' + $pps_pdf.data('src'));
  $pps_pdf.addClass('pps-pdf-loaded');
  setTimeout(function () {
    $pps_pdf.find('.pps-loading').remove();
  }, 5000);
}

function removeLazyLoadEmbedPopupPress($li) {
  var $pps_embed = $li.find('.pps-embed');
  $pps_embed.find('iframe').first().attr('src', 'about:blank');
  $pps_embed.removeClass('pps-embed-loaded');
}

function removeLazyLoadIframePopupPress($li) {
  var $pps_iframe = $li.find('.pps-iframe');
  $pps_iframe.find('iframe').first().attr('src', 'about:blank');
  $pps_iframe.removeClass('pps-iframe-loaded');
}

function setHeightContentPopupPress(id) {
  var popup = jQuery("#popuppress-" + id);
  popup.find('li.pps-item-content').each(function (index, el) {
    var $li = jQuery(el);
    if ($li.find('.pps-iframe').length || $li.find('.pps-pdf').length || $li.find('.pps-embed').length) {
      var $iframe = $li.find('iframe').first();
      var height = $iframe.parent().data('height');
      var headerHeight = 0;
      if (popup.find('.pps-header').length) {
        headerHeight = popup.find('.pps-header h3').outerHeight(true);
      }
      if (!isNaN(height)) {
        if (height == 100) {
          height = popup.find('.pps-wrap').height();
        }
        height = height - headerHeight;
        $iframe.css({
          'height': height
        });
      }
    }
  });

}

function manageHeightsPopupPress(id, medio, height) {
  var popup = jQuery("#popuppress-" + id);

  setTimeout(function () {
    var popupHeight = popup.height();
    //var contentHeight = popup.find('.pps-wrap').height();
    var contentHeight = popup.find(medio).height();
    var deviceHeight = jQuery(window).height();

    if (popup.find(medio).find('iframe').length) {
      var newContentHeight = contentHeight;
      if (height == 100) {
        newContentHeight = popup.find('.pps-wrap').height();
        if (popup.find(medio + '-bellow').length) {
          newContentHeight = newContentHeight - popup.find(medio + '-bellow').outerHeight(true);
        }
        popup.find(medio).find('iframe').css({
          'height': newContentHeight + 'px',
        });
      }
      var headerHeight = 0;
      if (popup.find('.pps-header').length) {
        headerHeight = popup.find('.pps-header h3').outerHeight(true);
      }
      if (medio == '.pps-embed') {
        if (contentHeight > deviceHeight - 60) {
          var newPopupHeight = deviceHeight - 80;
          popup.css({
            'height': newPopupHeight + 'px',
          });
          newContentHeight = popup.find('.pps-wrap').height();
        }
      }
      newContentHeight = newContentHeight - headerHeight;
      popup.find(medio).find('iframe').css({
        'height': newContentHeight + 'px',
      });

    }
  }, 20);
}

function manageSizeEmbedPopupPress(id, height) {
  manageHeightsPopupPress(id, '.pps-embed', height);
}

function manageSizeIframePopupPress(id, height) {
  manageHeightsPopupPress(id, '.pps-iframe', height);
}

function manageSizePdfPopupPress(id, height) {
  manageHeightsPopupPress(id, '.pps-pdf', height);
}

function setImageOverlayPopupPress(id, img_overlay) {

  if (jQuery.trim(img_overlay) !== "") {
    setTimeout(function () {
      jQuery('.b-modal').last().css({
        'background-image': ' url(' + img_overlay + ')',
        'background-position': '0px 0px',
        'background-repeat': 'repeat',
      });
    }, 60);
  }
}

function onClosePopupPress(id) {
  removeLazyLoadContentPopupPress(id);
  removeMessageFormsPopupPress();

  var popup = jQuery("#popuppress-" + id);

  popup.find('video,audio').trigger('pause');

  var $wp_video = popup.find('.wp-video');
  if ($wp_video.length) {
    $wp_video.removeClass('pps-responsive-video');
  }

  setTimeout(function () {
    var popup = jQuery("#popuppress-" + id);
    if (popup.find('#pps-slider-' + id).length) {
      jQuery("#pps-slider-" + id).popupslider("destroy");
    }
  }, 150);
  /*  Opcional, Delay tiene q ser mayor al establecido en pauseEmbedsPopupPress */

  //Not show again
  if (popup.find('label.pps-not-show-again').length && popup.find('label.pps-not-show-again > input').is(':checked')) {
    notShowAgainPopupPress(id);
  }

  //Close event for users
  popup.trigger("ppsOnClose");
}


function repositionPopupPress(id) {
  // var popup = jQuery("#popuppress-"+id);
  // var wHeight = jQuery(window).height();
  // var popupHeight = jQuery("#popuppress-"+id).outerHeight();
  // var topPosition = 20;
  // if( wHeight > popupHeight ){
  // 	topPosition = jQuery(window).scrollTop() + (wHeight-popupHeight)/2;
  // 	popup.animate({top: topPosition}, 500 );
  // }
}

function removeMessageFormsPopupPress() {
  //Solución a los mensajes al enviar formularios
  var formClass = {
    jetPack: '.contact-form-submission',
    gravityForms: '.gform_wrapper .validation_error, .gform_confirmation_message',
    contactForms: '.wpcf7-validation-errors, .wpcf7-mail-sent-ok'
  };
  var reload = false;
  jQuery('.pps-popup').each(function (index, element) {
    if (jQuery(this).find(formClass.jetPack).length) {
      reload = true;
    }
  });
  if (reload) {
    window.location = window.location.href.split("?")[0];
  }
}

function updateViewsPopupPress(id, restore) {
  restore = restore || 'false';
  var datos = {
    action: 'update_views_popups',
    id: id,
    plugin: 'popuppress',
    restore: restore
  };
  jQuery.ajax({
    type: "POST",
    url: PPS.ajaxurlPps,
    data: datos,
    success: function (result) {
      var data = jQuery.parseJSON(result);
      if (data.success === true) {
        if (jQuery('table.wp-list-table').length) {
          jQuery('tr#post-' + id + ' td.column-views > p > span:eq(0)').html(data.views);
        }
      }
    }
  });
}

function notShowAgainPopupPress(id) {
  jQuery.cookie("pps_not_show_again_" + id, "not_show_again", { expires: 20 * 365, path: "/" });
  jQuery(document).unbind("mouseleave.pps");
}

function disclaimerPopupPress(id, activated, agreeRedirect, disagreeRestriction, useCookie, $cookie_expire, $cookie_days) {
  if (activated == 'true') {
    jQuery('#pps-btn-agree-' + id).on('click', function (event) {
      if (agreeRedirect == 'same_page') {
        event.preventDefault();
        jQuery('#popuppress-' + id).bPopup().close();
      }
      //Solo registramos cookies fuera de la administración de wordpress
      if (useCookie == 'true' && jQuery(location).attr("href").indexOf("/wp-admin/") < 0) {
        if ($cookie_expire == 'number_days') {
          jQuery.cookie("pps_disclaimer_" + id, $cookie_days + "_days", { expires: $cookie_days, path: "/" });
        }
        else {
          jQuery.cookie("pps_disclaimer_" + id, "current_session", { path: "/" });
        }
      }
    });
    jQuery('#pps-btn-disagree-' + id).on('click', function (event) {
      if (disagreeRestriction == 'close_page') {
        event.preventDefault();
        window.close();
      } else if (disagreeRestriction == 'close_popup') {
        event.preventDefault();
        jQuery('#popuppress-' + id).bPopup().close();
      }
    });
  }
}

//Debug
function cl(msg) {
  console.log(msg);
}

function ccl(msg, msg2) {
  console.log(msg, msg2);
}


/**
 * isMobile.js v0.3.9
 *
 * A simple library to detect Apple phones and tablets,
 * Android phones and tablets, other mobile devices (like blackberry, mini-opera and windows phone),
 * and any kind of seven inch device, via user agent sniffing.
 *
 * @author: Kai Mallea (kmallea@gmail.com)
 *
 * @license: http://creativecommons.org/publicdomain/zero/1.0/
 */
!function (a) {
  var b = /iPhone/i, c = /iPod/i, d = /iPad/i, e = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i, f = /Android/i,
    g = /(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,
    h = /(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,
    i = /IEMobile/i, j = /(?=.*\bWindows\b)(?=.*\bARM\b)/i, k = /BlackBerry/i, l = /BB10/i, m = /Opera Mini/i,
    n = /(CriOS|Chrome)(?=.*\bMobile\b)/i, o = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,
    p = new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"), q = function (a, b) {
      return a.test(b)
    }, r = function (a) {
      var r = a || navigator.userAgent, s = r.split("[FBAN");
      return "undefined" != typeof s[1] && (r = s[0]), this.apple = {
        phone: q(b, r),
        ipod: q(c, r),
        tablet: !q(b, r) && q(d, r),
        device: q(b, r) || q(c, r) || q(d, r)
      }, this.amazon = {
        phone: q(g, r),
        tablet: !q(g, r) && q(h, r),
        device: q(g, r) || q(h, r)
      }, this.android = {
        phone: q(g, r) || q(e, r),
        tablet: !q(g, r) && !q(e, r) && (q(h, r) || q(f, r)),
        device: q(g, r) || q(h, r) || q(e, r) || q(f, r)
      }, this.windows = {
        phone: q(i, r),
        tablet: q(j, r),
        device: q(i, r) || q(j, r)
      }, this.other = {
        blackberry: q(k, r),
        blackberry10: q(l, r),
        opera: q(m, r),
        firefox: q(o, r),
        chrome: q(n, r),
        device: q(k, r) || q(l, r) || q(m, r) || q(o, r) || q(n, r)
      }, this.seven_inch = q(p, r), this.any = this.apple.device || this.android.device || this.windows.device || this.other.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone || this.windows.phone, this.tablet = this.apple.tablet || this.android.tablet || this.windows.tablet, "undefined" == typeof window ? this : void 0
    }, s = function () {
      var a = new r;
      return a.Class = r, a
    };
  "undefined" != typeof module && module.exports && "undefined" == typeof window ? module.exports = r : "undefined" != typeof module && module.exports && "undefined" != typeof window ? module.exports = s() : "function" == typeof define && define.amd ? define("isMobile", [], a.isMobile = s()) : a.isMobile = s()
}(this);