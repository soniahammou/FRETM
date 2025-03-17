
import { slider } from "./slider.js";

const app ={

  init:function(){
    slider.init();
    console.log('test')
  }
}

document.addEventListener('DOMContentLoaded', app.init);