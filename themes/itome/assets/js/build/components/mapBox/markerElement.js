var app=function(t){"use strict";return t.MarkerElement=class{constructor(t,e){this.map=e,this.markerData=t,this.marker=null,this.render(),this.bindEventListeners()}bindEventListeners(){let t=this.map,e=this.markerData;this.marker;this.marker.addEventListener("click",(()=>{let r=document.querySelector(`[data-list-id="${e.properties.id}"]`),a=document.querySelectorAll("[data-list-id]"),i=[].find.call(a,(t=>t.classList.contains("is-active")));i&&i.classList.remove("is-active"),r.classList.add("is-active"),r.scrollIntoView({behavior:"smooth",block:"center"}),t.easeTo({center:e.geometry.coordinates,bearing:180,pitch:70,zoom:12,duration:1500})}))}render(){this.marker=document.createElement("button"),this.marker.classList.add("marker"),this.marker.setAttribute("data-map-link",`${this.markerData.properties.id}`),this.marker.innerHTML=`<div data-map-tooltip="">${this.markerData.properties.text}</div>`,this.marker.style.backgroundImage='url("/themes/itome/assets/img/marker.svg")'}},t}({});