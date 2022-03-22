<template>
  <div class="content">
    <div class="md-layout">
      <div class="md-layout-item md-medium-size-100 md-size-66">
        <component :is="dynamicComponent" v-bind="currentProperties" @changeComponent="switchComponent" @notification="notifyVue"></component>
      </div>
    </div>
  </div>
</template>

<script>
import {BlogCard, BlogTable} from '@/components';

export default {
  data() {
    return {
      errors: [],
      dynamicComponent: 'blog-table',
      item:  1
    }
  },
  computed: {
    currentProperties: function() {
      let componentProps = { 'data-background-color': 'green' }

      // Add item to edit form
      if (this.dynamicComponent === 'blog-card') {
        componentProps.item = this.item
      }
      return componentProps;
    }
  },
  components: {
    BlogCard,
    BlogTable
  },
  methods: {
    switchComponent(componentName, item) {
      this.item = item
      this.dynamicComponent = componentName
    },
    notifyVue(type, message) {
      this.$notify({
        message: message,
        icon: 'add_alert',
        horizontalAlign: 'center',
        verticalAlign: 'top',
        type: type,
      });
    },
  },
};
</script>
<style>
  .capitalise {
    text-transform: capitalize;
  }
</style>
