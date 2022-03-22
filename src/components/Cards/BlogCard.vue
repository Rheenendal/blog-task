<template>
  <div>
    <md-card>
      <md-card-header :data-background-color="dataBackgroundColor">
        <h4 class="title capitalise">{{ item.title }}</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          <span v-html="item.body"></span>
          <div class="md-layout-item md-size-100 text-right">
            <md-button class="md-raised md-success" @click="$emit('changeComponent', 'blog-table')">Back to table</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>

    <md-card v-if="(item.comments).length">
      <md-card-header :data-background-color="dataBackgroundColor">
        <h4 class="title capitalise">Comments</h4>
      </md-card-header>

      <md-card-content>
        <div class="md-layout" v-for="comment in item.comments" :key="comment.comment">
          <p>
            "<span v-html="comment.comment" style="font-style: italic"></span>" - {{ comment.commented_on }}
          </p>
        </div>
      </md-card-content>
    </md-card>
  </div>
</template>
<script>
  export default {
    name: 'blog-card',
    props: {
      dataBackgroundColor: {
        type: String,
        default: 'green',
      },
      item: {
        type: Object,
        required: true
      },
    }
  };
</script>
<style></style>
