const modal = document.querySelector('.modal')
const modalActive = document.querySelector('.active-modal')
const modalClose = document.querySelector('.modal_close')

modalActive.addEventListener('click', (e) => {
  e.preventDefault()
  modal.classList.add('modal--show')
})

modalClose.addEventListener('click', (e) => {
  e.preventDefault()
  modal.classList.remove('modal--show')
})