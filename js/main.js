function changePage(page){
    document.pageForm.page.value = page;
    document.forms["pageForm"].submit();
}

function changeExp(eid){
    document.expForm.eid.value = eid;
    document.expForm.epage.value = 'intro';
    document.forms["expForm"].submit();
}

function changeExpPage(epage){
    document.expPage.epage.value = epage;
    document.forms["expPage"].submit();
}
