import Vue from 'vue'
import signup from 'src/components/signup'

describe('Hello.vue', () => {
  it('should render correct contents', () => {
    const vm = new Vue({
      el: document.createElement('div'),
      render: (h) => h(signup)
    })
    expect(vm.$el.querySelector('.signup h1').textContent)
      .to.equal('Welcome to Your Vue.js App')
  })
})
