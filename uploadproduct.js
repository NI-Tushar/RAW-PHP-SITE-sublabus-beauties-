
function uploadfunc(proname,uploadsfile) {
    console.log("uploadfunc");
    let elem1 = document.createElement('div');
    elem1.className = 'foundation';
  
    elem1.innerHTML = '<h2>'+proname+'</h2>'+
                '<form action="'+uploadsfile+'" method="POST" enctype="multipart/form-data">'+
                    '<div class="upload-main-div">'+
                        '<div class="upload-div"'+
                        '<div>'+
                            '<span>Id:</span>'+
                            '<input type="text" name="id" id="id" required>'+
                        '</div>'+
                        '<br>'+
                        '<div>'+
                            '<span>title:</span>'+
                            '<input type="text" name="title" id="title" required>'+
                        '</div>'+
                        '<br>'+
                        '<div>'+
                            '<span>model:</span>'+
                            '<input type="text" name="model" id="model" required>'+
                        '</div>'+
                        '<br>'+
                        '<div>'+
                            '<span>Stock:</span>'+
                            '<input type="text" name="stock" id="stock" required>'+
                        '</div>'+
                        '<br>'+
                        '<div>'+
                            '<span>image-1:</span>'+
                            '<input type="file" name="image-1" id="image-1" required>'+
                        '</div>'+
                        '<br>'+
                        '<div>'+
                            '<span>image-2:</span>'+
                            '<input type="file" name="image-2" id="image-2" required>'+
                        '</div>'+
                        '<br>'+
                        '<div>'+
                            '<span>Price:</span>'+
                            '<input type="text" name="price" id="price" required>'+
                        '</div>'+
                        '<br>'+
                        '<div>'+
                            '<input type="submit" value="Upload" name="submit">'+
                            '<input type="reset" value="Clear" name="clear">'+
                        '</div>'+
                         '</div>'+
                    '</div>'+
                '</form>'+
            '</div>';

    let ul = document.querySelector(".cards");
    ul.appendChild(elem1);
}

