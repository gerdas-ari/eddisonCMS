var app=function(t){"use strict";class e{constructor(t){this.el=t,this.wrapper=this.el.closest("[data-tabs-wrapper]"),this.clickedToggle=null}get isActive(){return this.el.classList.contains("is-active")}set isActive(t){t?(this.el.classList.add("is-active"),this.wrapper.dataset.activeTab=this.el.dataset.tab):(this.el.classList.remove("is-active"),this.clickedToggle&&this.clickedToggle.classList.remove("is-clicked"))}}let a=function(){let t={};function a(a){let i=a.dataset.tab;(function(e){return void 0!==t[e]})(i)||(t[i]=new e(a))}function i(){document.addEventListener("mousedown",(function(e){if(1===e.which){let i=e.target.closest("[data-linked-tab]");i&&t[i.dataset.linkedTab]&&(i.classList.add("is-clicked"),t[i.dataset.linkedTab].clickedToggle=i,(a=t[i.dataset.linkedTab]).wrapper.querySelector("[data-tab].is-active")&&(t[a.wrapper.querySelector("[data-tab].is-active").dataset.tab].isActive=!1),a.isActive=!0,e.stopPropagation(),e.preventDefault())}var a}))}return{init:function(){!function(){let t=document.querySelectorAll("[data-tab]");[].forEach.call(t,a)}(),i(),[].forEach.call(document.querySelectorAll("[data-tabs-wrapper]"),(e=>{let a=e.querySelector("[data-tab]").dataset.tab,i=document.querySelector(`[data-linked-tab="${a}"]`);t[a].isActive=!0,t[a].clickedToggle=i,i.classList.add("is-clicked")}))}}}();return t.TabsDispatcher=a,t}({});