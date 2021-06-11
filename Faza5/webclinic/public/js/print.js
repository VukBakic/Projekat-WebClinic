document.onreadystatechange = function () {
  if (document.readyState == 'complete') {
    let lista = document.querySelectorAll('.member-info');
    function PrintElem(elem) {
      elem = elem.cloneNode(true);
      elem.querySelector('.interna-napomena').remove();
      elem.querySelector('.interna-napomena-text').remove();
      elem.querySelector('.cstm-form-btn').remove();

      var mywindow = window.open('', 'PRINT', 'height=400,width=600');

      mywindow.document.write(
        '<html><head><title>' + document.title + '</title>'
      );
      let css = document.getElementsByTagName('link');

      mywindow.document.write(css[0].outerHTML);
      mywindow.document.write(css[1].outerHTML);
      mywindow.document.write(css[2].outerHTML);
      mywindow.document.write(css[3].outerHTML);

      mywindow.document.write(
        '</head><body id="print"><div class="container styledlist">'
      );
      mywindow.document.write('<h1>' + document.title + '</h1>');
      mywindow.document.write(elem.outerHTML);
      mywindow.document.write(
        '<hr class="mt-5 potpis-line ms-auto"><p class="potpis text-end">potpis</p></div></body></html>'
      );

      mywindow.document.close(); // necessary for IE >= 10
      mywindow.focus(); // necessary for IE >= 10*/

      mywindow.print();

      return true;
    }

    lista.forEach(function (element) {
      element
        .querySelector('.print-btn')
        .addEventListener('click', function (event) {
          PrintElem(element);
        });
    });
  }
};
