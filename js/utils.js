function applyListFilter() {
    //called whenever a user presses "Filter" on one of the list view filter forms.
    //Will produce a url with couchcms filtering parameters and redirect the user to that url.
    let category = document.getElementById('select-folder').value;
    let contentType = document.getElementById('select-contenttype').value;

    if (category == '' && contentType == '') {
        //no filter selected
        return;
    }
    
    //current url (doing it this way removes parameters)
    var new_url = window.location.protocol + '//' + window.location.host + window.location.pathname;

    //a category filter has been selected
    if (category != '') {
        new_url = new_url + '?f=' + category;
    }

    //a content type filter has been selected (can be both)
    if (contentType != '') {

    }

    //redirect the user
    window.location = new_url;
}

function resetListFilter() {
    //strip parameters and redirect
    window.location = window.location.protocol + '//' + window.location.host + window.location.pathname;
}