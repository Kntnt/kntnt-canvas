/* has-scrolled.js
---------------------------------------------------------------------------- */

(function () {

  const className = 'has-scrolled'
  const scrollTrigger = 10
  let previousState = false

  document.addEventListener('scroll', (event) => {
    let hasScrolled = window.scrollY >= scrollTrigger
    if (hasScrolled !== previousState) {
      window.requestAnimationFrame(() => {
        if (hasScrolled) {
          document.getElementsByTagName('body')[0].classList.add(className)
          previousState = true
        }
        else {
          document.getElementsByTagName('body')[0].classList.remove(className)
          previousState = false
        }
      })
    }
  })
})()
