(function (window, document, undefined) {

  'use strict'

  var search_label = document.querySelector('.search-label')
  var section_k = document.querySelector('.k')

  var k = section_k.querySelector('input:checked')
  search_label.innerHTML = k.value

  section_k.addEventListener('click', function (e) {
    var k = e.currentTarget.querySelector('input:checked')
    search_label.innerHTML = k.value
    console.log(k.value)
  })

})(window, document)
