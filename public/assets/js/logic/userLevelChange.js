/*
 * TechAssist - Sistema de Aprendizaje Interactivo
 * Copyright (c) 2024 TechAssist
 * Autor: Angel Jesús Romero Pérez
 * 
 * Este archivo es parte de TechAssist y está protegido por derechos de autor.
 * Uso no autorizado de este código está prohibido.
 */


let userNivel
let nivelContainer = document.getElementById('userLevel')
let nivelActual = nivelContainer.textContent

const getNivel = async () => {
  try {
    const response = await fetch('../../app/controllers/userLevel.php')
    const data = await response.json()
    userNivel = data.userLevel
    handleNivel()
  } catch (error) {
    console.error('Error:', error)
  }
}

const handleNivel = () => {
  const niveles = {
    1: 'principiante',
    2: 'promedio', 
    3: 'experto'
  }

  const nivel = niveles[userNivel]

  switch(nivel) {
    case 'principiante':
      // Textos
      let textos = document.querySelectorAll('.txt')
      textos.forEach(txt => txt.classList.add('txt_' + nivel))
      
      // Contenedores
      let boxes = document.querySelectorAll('.box') 
      boxes.forEach(box => {
        if(box.id.includes('box_' + nivel) || box.classList.contains('nivel_' + nivel)) {
          box.style.display = 'block'
        } else {
          box.style.display = 'none' 
        }
      })

      // Imágenes por ID
      let imgs = document.querySelectorAll('.img')
      imgs.forEach(img => {
        if(img.id.includes('img_' + nivel)) {
          img.src = '../../public/assets/images/principiante/' + img.dataset.img
        }
      })

      // Imágenes con ID existente
      let imgsClase = document.querySelectorAll('.img')
      imgsClase.forEach(img => {
        if(img.classList.contains('nivel_' + nivel)) {
          img.src = '../../public/assets/images/principiante/' + img.dataset.img
        }
      })
      break

    case 'promedio':
      // Textos
      let textosMed = document.querySelectorAll('.txt')
      textosMed.forEach(txt => txt.classList.add('txt_' + nivel))
      
      // Contenedores  
      let boxesMed = document.querySelectorAll('.box')
      boxesMed.forEach(box => {
        if(box.id.includes('box_' + nivel) || box.classList.contains('nivel_' + nivel)) {
          box.style.display = 'flex'
        } else {
          box.style.display = 'none'
        }
      })

      // Imágenes por ID
      let imgsMed = document.querySelectorAll('.img') 
      imgsMed.forEach(img => {
        if(img.id.includes('img_' + nivel)) {
          img.src = '../../public/assets/images/promedio/' + img.dataset.img  
        }
      })

      // Imágenes con ID existente
      let imgsMedClase = document.querySelectorAll('.img')
      imgsMedClase.forEach(img => {
        if(img.classList.contains('nivel_' + nivel)) {
          img.src = '../../public/assets/images/promedio/' + img.dataset.img
        }
      })
      break

    case 'experto':
      // Textos
      let textosPro = document.querySelectorAll('.txt')
      textosPro.forEach(txt => txt.classList.add('txt_' + nivel))

      // Contenedores
      let boxesPro = document.querySelectorAll('.box')
      boxesPro.forEach(box => {
        if(box.id.includes('box_' + nivel) || box.classList.contains('nivel_' + nivel)) {
          box.style.display = 'grid'
        } else {
          box.style.display = 'none'
        }
      })

      // Imágenes por ID
      let imgsPro = document.querySelectorAll('.img')
      imgsPro.forEach(img => {
        if(img.id.includes('img_' + nivel)) {
          img.src = '../../public/assets/images/experto/' + img.dataset.img
        }
      })

      // Imágenes con ID existente
      let imgsProClase = document.querySelectorAll('.img')
      imgsProClase.forEach(img => {
        if(img.classList.contains('nivel_' + nivel)) {
          img.src = '../../public/assets/images/experto/' + img.dataset.img
        }
      })
      break
  }
}

document.addEventListener('DOMContentLoaded', getNivel)