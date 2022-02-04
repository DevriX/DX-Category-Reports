window.addEventListener('load', function(){

    var categorySelect = document.querySelector('select[name="category_id"]');
    var reportsTableField = document.querySelector('#reports-table td');

    categorySelect.addEventListener('change', function(){
        this.closest('form').submit();
    });
    
});