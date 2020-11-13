let objectSelect = document.getElementById('object');

function loadObjects()
{
    veil();
    apiRequest('GET', 'history/objects', []).done(function(json){
        if(json.code === 200)
        {
            $.each(json.data, function(i, e){
                let option = document.createElement('option');
                option.value = e;
                option.appendChild(document.createTextNode(e.toUpperCase()));
                objectSelect.appendChild(option);
            });
            unveil();
        }
        else
            showNotifications('error', ['Could not load objects'])
    });
}

function searchHistory()
{
    let index = document.getElementById('index').value;
    window.location.href = baseURI + 'history/' + objectSelect.value + '/' + index;
}

$(document).ready(function(){
    if(objectSelect)
        loadObjects();
});