
Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('btn-icon', require('./components/ButtonIconComponent.vue'));
Vue.component('btn-action', require('./components/ButtonActionComponent.vue'));
Vue.component('btn-confirm', require('./components/ButtonConfirmComponent.vue'));
Vue.component('panel', require('./components/PanelComponent.vue'));
Vue.component('form-group', require('./components/FormGroupComponent.vue'));
Vue.component('date-picker', require('./components/DatePickerComponent.vue'));
Vue.component('time-picker', require('./components/TimePickerComponent.vue'));
Vue.component('datatable', require('./components/DatatableComponent.vue'));

const app = new Vue({
    el: '#app'
});
