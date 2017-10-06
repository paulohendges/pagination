function nextPage(nextPage){
    $('#page-submit-id').val(nextPage);
    $('form[name="form-pagination"]').submit();
}

function previousPage(previousPage){
    $('#page-submit-id').val(previousPage);
    $('form[name="form-pagination"]').submit();
}

function goToPage(){
    $('#page-submit-id').val($('select[name="select-pagination"] option:selected').val());
    $('form[name="form-pagination"]').submit();   
}

