// UIkit JS
/* #1 offCanvas methods */
//UIkit.offcanvas('#offcanvas-nav-primary').toggle();

/* #2 offCanvas events */
UIkit.util.on('#offcanvas-nav-primary', 'beforeshow', function () {
    // do something
    console.log('offcanvas beforeshow');
  });
  
  UIkit.util.on('#offcanvas-nav-primary', 'show', function () {
    // do something
    console.log('offcanvas show');
  });
  
  UIkit.util.on('#offcanvas-nav-primary', 'shown', function () {
    // do something
    console.log('offcanvas shown');
  });
  
  UIkit.util.on('#offcanvas-nav-primary', 'beforehide', function () {
    // do something
    console.log('offcanvas beforehide');
  });
  
  UIkit.util.on('#offcanvas-nav-primary', 'hide', function () {
    // do something
    console.log('offcanvas hide');
  });
  
  UIkit.util.on('#offcanvas-nav-primary', 'hidden', function () {
    // do something
    console.log('offcanvas hidden');
  });

  // alert("Teste \n javascript ( JS )");