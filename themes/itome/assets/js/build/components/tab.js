var app=function(s){"use strict";return s.Tab=class{constructor(s){this.el=s,this.wrapper=this.el.closest("[data-tabs-wrapper]"),this.clickedToggle=null}get isActive(){return this.el.classList.contains("is-active")}set isActive(s){s?(this.el.classList.add("is-active"),this.wrapper.dataset.activeTab=this.el.dataset.tab):(this.el.classList.remove("is-active"),this.clickedToggle&&this.clickedToggle.classList.remove("is-clicked"))}},s}({});