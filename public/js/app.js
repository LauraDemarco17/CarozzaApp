document.getElementById('filter_manufacturer_id').addEventListener('change',
function(){
    //generate a query string
    //http://sss-lab:800/cars?manufacturer_id=2
    let manufacturerId = this.value || this.options[this.selectedIndex].value;
    window.location.href = window.location.hred.split("?")[0] + '?' + manufacturerId
    //we split to eliminate this scenario of multiple concatenations
    //
})