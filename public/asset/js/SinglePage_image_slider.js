let product_image_lists = document.getElementsByClassName('product_page_image_display_list');

let activeImages = document.getElementsByClassName('active');

for (var i=0; i < product_image_lists.length; i++){
    console.log(activeImages);
	product_image_lists[i].addEventListener('mouseover', function(){
		
		
		if (activeImages.length > 0){
			activeImages[0].classList.remove('active')
		}
		this.classList.add('active')
		document.getElementById('product_page_zoomed_image').src = this.src
	})
}


