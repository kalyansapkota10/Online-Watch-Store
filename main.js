/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll('#menu')
    
function scrollActive(){
  	const scrollY = window.pageYOffset

	sections.forEach(current =>{
		const sectionHeight = current.offsetHeight,
			  sectionTop = current.offsetTop,
			  sectionId = current.getAttribute('#menu')

		if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav_link a[href*=' + sectionId + ']').classList.add('active-link')
		}else{
            document.querySelector('.nav_link a[href*=' + sectionId + ']').classList.remove('active-link')
		}                                                    
	})
}
window.addEventListener('scroll', scrollActive)
