

document.getElementById('product_page_image_display').addEventListener('mouseover', function(){
    imageZoom('product_page_zoomed_image')
    
})

function imageZoom(imgID){
	let img = document.getElementById(imgID)
	let lens = document.getElementById('lens')

	lens.style.backgroundImage = `url( ${img.src} )`

	let ratio = 2

	lens.style.backgroundSize = (img.width * ratio) + 'px ' + (img.height * ratio) + 'px';

	img.addEventListener("mousemove", moveLens)
	lens.addEventListener("mousemove", moveLens)
	img.addEventListener("touchmove", moveLens)

	function moveLens(){
		let pos = getCursor()
		//console.log('pos:', pos)

		//2
		let positionLeft = pos.x - (lens.offsetWidth / 100)
		let positionTop = pos.y - (lens.offsetHeight / 100)

		//5
		if(positionLeft < 0 ){
			positionLeft = 0
		}

		if(positionTop < 0 ){
			positionTop = 0
		}

		if(positionLeft > img.width - lens.offsetWidth /100 ){
			positionLeft = img.width - lens.offsetWidth /100
		}

		if(positionTop > img.height - lens.offsetHeight /100){
			positionTop = img.height - lens.offsetHeight /100
		}


		//3
		lens.style.left = positionLeft + 'px';
		lens.style.top = positionTop + 'px';

		//4
		lens.style.backgroundPosition = "-" + (pos.x * ratio) + 'px -' +  (pos.y * ratio) + 'px'
	}

	function getCursor(){
        let e = window.event
        let bounds = img.getBoundingClientRect()
        let x = e.pageX - bounds.left
		let y = e.pageY - bounds.top
		x = x - window.pageXOffset;
		y = y - window.pageYOffset;	
		return {'x':x, 'y':y}
	}

}

imageZoom('product_page_zoomed_image')


