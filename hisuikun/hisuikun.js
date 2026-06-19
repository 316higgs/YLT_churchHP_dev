(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded', function(){
    var page = document.querySelector('.hisui-page');
    if(!page) return;

    // スクロールフェード
    if('IntersectionObserver' in window){
      var io = new IntersectionObserver(function(es){
        es.forEach(function(e){
          if(e.isIntersecting){ e.target.classList.add('hisui-in'); io.unobserve(e.target); }
        });
      },{threshold:.12});
      page.querySelectorAll('.hisui-fade').forEach(function(el){ io.observe(el); });
    }else{
      page.querySelectorAll('.hisui-fade').forEach(function(el){ el.classList.add('hisui-in'); });
    }

    // かわせみメモ モーダル
    var modal = document.getElementById('hisuiModal');
    var modalImg = document.getElementById('hisuiModalImg');
    var modalClose = document.getElementById('hisuiModalClose');
    var lastFocus = null;

    function closeModal(){
      if(!modal) return;
      modal.classList.remove('hisui-open');
      if(lastFocus) lastFocus.focus();
    }
    if(modal && modalImg && modalClose){
      page.querySelectorAll('.hisui-tap-btn').forEach(function(btn){
        btn.addEventListener('click', function(){
          lastFocus = btn;
          modalImg.src = btn.dataset.src || '';
          modal.classList.add('hisui-open');
          modalClose.focus();
        });
      });
      modalClose.addEventListener('click', closeModal);
      modal.addEventListener('click', function(e){ if(e.target===modal) closeModal(); });
      document.addEventListener('keydown', function(e){ if(e.key==='Escape') closeModal(); });
    }

    // トップへ戻る
    var toTop = document.getElementById('hisuiToTop');
    if(toTop){
      window.addEventListener('scroll', function(){
        toTop.classList.toggle('hisui-show', window.scrollY > 600);
      }, {passive:true});
      toTop.addEventListener('click', function(){
        window.scrollTo({top:0, behavior:'smooth'});
      });
    }
  });
})();
