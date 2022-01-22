

function prodfunc(title, model, stock, img_path, price, alt_img_path) {
    console.log("heelllsdf");
    let elem1 = document.createElement('div');
    elem1.className = 'col-md-3 col-sm-6';
  
    elem1.innerHTML = '<div class="product-grid">' +
        '<div class="product-image">' +
        '<a href="#">' +
        '<img class="pic-1" src="'+img_path+'">' +
        '<img class="pic-2" src="'+alt_img_path+'">' +
        '</a>' +
        '<ul class="social">' +
        '<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>' +
        '<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>' +
        '<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>' +
        '</li>' +
        '</ul>' +
        '<span class="product-new-label">'+stock+'</span>' +
        '</div>' +
        '<ul class="rating">' +
        '<li class="fa fa-star"></li><li class="fa fa-star"></li>' +
        '<li class="fa fa-star"></li><li class="fa fa-star"></li>' +
        '<li class="fa fa-star disable"></li>' +
        '</ul>' +
        '<div class="product-content"><h3 class="title"><a href="#">'+title+'</a></h3>' +
        '<h3 class="title"><a href="#">'+model+'</a></h3>' +
        '<div class="price">BTD:'+price+'</div>' +
        '<button class="add-to-cart">Buy Now</button>' +
        '</div>' +
        '</div>';

    let ul = document.querySelector(".row");
    console.log(ul);
    ul.appendChild(elem1);
}
