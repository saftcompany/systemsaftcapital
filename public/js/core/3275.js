"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[3275],{6791:(a,t,s)=>{s.d(t,{Z:()=>c});var i=s(1519),e=s.n(i)()((function(a){return a[1]}));e.push([a.id,".faq-search[data-v-fa3c75ca]{background-color:rgba(115,103,240,.12)!important;background-size:cover}.faq-search .faq-search-input .input-group[data-v-fa3c75ca]:focus-within{box-shadow:none}.faq-contact .faq-contact-card[data-v-fa3c75ca]{background-color:rgba(186,191,199,.12)}@media (min-width:992px){.faq-search .card-body[data-v-fa3c75ca]{padding:8rem!important}}@media (min-width:768px) and (max-width:991.98px){.faq-search .card-body[data-v-fa3c75ca]{padding:6rem!important}}@media (min-width:768px){.faq-search .faq-search-input .input-group[data-v-fa3c75ca]{margin:0 auto;width:576px}.faq-navigation[data-v-fa3c75ca]{height:550px}}",""]);const c=e},3275:(a,t,s)=>{s.r(t),s.d(t,{default:()=>o});const i={props:[],components:{},data:function(){return{categories:[]}},methods:{goBack:function(){window.history.length>1?this.$router.go(-1):this.$router.push("/")},fetchCategories:function(){var a=this;this.$http.get("/user/knowledge/faq").then((function(t){a.categories=t.data.categories})).catch((function(a){}))},search:function(){this.$router.push("/knowledge/faq/"+this.$refs.search.value).catch((function(a){"NavigationDuplicated"===a.name||a.message.includes("Avoided redundant navigation to current location")||logError(a)}))}},created:function(){},mounted:function(){this.fetchCategories()},destroyed:function(){}};var e=s(3379),c=s.n(e),n=s(6791),r={insert:"head",singleton:!1};c()(n.Z,r);n.Z.locals;const o=(0,s(1900).Z)(i,(function(){var a=this,t=a.$createElement,s=a._self._c||t;return s("div",[s("section",{attrs:{id:"faq-search-filter"}},[s("div",{staticClass:"card faq-search",staticStyle:{"background-image":"url('images/banner/banner.png')"}},[s("div",{staticClass:"card-body text-center"},[s("h2",{staticClass:"text-primary"},[a._v("\n                    "+a._s(a.$t("Let's answer some questions"))+"\n                ")]),a._v(" "),s("p",{staticClass:"card-text mb-2"},[a._v("\n                    "+a._s(a.$t("or choose a category to quickly find the help you need"))+"\n                ")]),a._v(" "),s("form",{staticClass:"faq-search-input",on:{submit:function(t){return t.preventDefault(),a.search()}}},[s("div",{staticClass:"input-group input-group-merge"},[a._m(0),a._v(" "),s("input",{ref:"search",staticClass:"form-control",attrs:{type:"text",placeholder:"Search faq..."}})])])])])]),a._v(" "),s("section",{attrs:{id:"faq-tabs"}},[s("div",{staticClass:"row"},[s("div",{staticClass:"col-lg-3 col-md-4 col-sm-12"},[s("div",{staticClass:"faq-navigation d-flex justify-content-between flex-column mb-2 mb-md-0"},[s("ul",{staticClass:"nav nav-pills nav-left flex-column",attrs:{role:"tablist"}},a._l(a.categories,(function(t,i){return s("li",{key:i,staticClass:"nav-item"},[s("a",{staticClass:"nav-link",class:1==t.id?"active":"",attrs:{id:t.id,"data-bs-toggle":"pill",href:"#faq-category-"+t.id,"aria-expanded":"true",role:"tab"}},[s("i",{staticClass:"font-medium-3 me-1",attrs:{"data-feather":"credit-card"}}),a._v(" "),s("span",{staticClass:"fw-bold"},[a._v(a._s(t.category))])])])})),0),a._v(" "),s("img",{staticClass:"img-fluid d-none d-md-block",attrs:{src:"images/illustration/faq-illustrations.svg",alt:"demand img"}})])]),a._v(" "),s("div",{staticClass:"col-lg-9 col-md-8 col-sm-12"},[s("div",{staticClass:"tab-content"},a._l(a.categories,(function(t,i){return s("div",{key:i,staticClass:"tab-pane",class:1==t.id?"active":"",attrs:{id:"faq-category-"+t.id,role:"tabpanel","aria-labelledby":t.category,"aria-expanded":"false"}},[s("div",{staticClass:"d-flex align-items-center"},[a._m(1,!0),a._v(" "),s("div",[s("h4",{staticClass:"mb-0"},[a._v(a._s(t.category))])])]),a._v(" "),a._l(t.faq_questions,(function(t,i){return s("div",{key:i,staticClass:"accordion accordion-margin mt-2",attrs:{id:"#faq-question-"+t.id}},[s("div",{staticClass:"card accordion-item"},[s("h2",{staticClass:"accordion-header",attrs:{id:t.category_id+t.id}},[s("button",{staticClass:"accordion-button collapsed",attrs:{"data-bs-toggle":"collapse",role:"button","data-bs-target":"#faq-question-"+t.id,"aria-controls":"#faq-question-"+t.id,"aria-expanded":"false"}},[a._v("\n                                        "+a._s(t.question)+"\n                                    ")])]),a._v(" "),s("div",{staticClass:"collapse accordion-collapse",attrs:{id:"faq-question-"+t.id,"aria-labelledby":t.category_id+t.id,"data-bs-parent":"#faq"+t.id}},[s("div",{staticClass:"accordion-body text-dark"},[a._v("\n                                        "+a._s(t.answer)+"\n                                    ")])])])])}))],2)})),0)])])]),a._v(" "),s("section",{staticClass:"faq-contact"},[s("div",{staticClass:"row mt-5 pt-75"},[s("div",{staticClass:"col-12 text-center"},[s("h2",[a._v(a._s(a.$t("You still have a question"))+"?")]),a._v(" "),s("p",{staticClass:"mb-3"},[a._v("\n                    "+a._s(a.$t("If you cannot find a question in our FAQ, you can always contact us. We will answer to you shortly!"))+"\n                ")])])])])])}),[function(){var a=this.$createElement,t=this._self._c||a;return t("div",{staticClass:"input-group-text"},[t("i",{staticClass:"bi bi-search"})])},function(){var a=this.$createElement,t=this._self._c||a;return t("div",{staticClass:"avatar avatar-tag bg-light-primary me-1"},[t("i",{staticClass:"font-medium-4 bi bi-info-lg"})])}],!1,null,"fa3c75ca",null).exports}}]);