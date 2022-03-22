<template>
  <div class="content">
    <div class="md-layout">
      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header class="md-layout" :data-background-color="dataBackgroundColor">
            <div class="md-layout-item md-size-50">
              <h4 class="title capitalise">Blog Posts</h4>
            </div>
          </md-card-header>
          <md-card-content>
            <div>
              <md-table v-model="items" :table-header-color="tableHeaderColor">
                <md-table-row slot="md-table-row" slot-scope="{ item }" @click="$emit('changeComponent', 'blog-card', item)">
                  <md-table-cell md-label="Title">{{ item.title }}</md-table-cell>
                  <md-table-cell md-label="Comments">{{ (item.comments).length }}</md-table-cell>
                </md-table-row>
              </md-table>
            </div>
          </md-card-content>
        </md-card>
      </div>
    </div>
  </div>
</template>

<script>
  import axios from 'axios';

  export default {
    name: 'blog-table',
    props: {
      tableHeaderColor: {
        type: String,
        default: '',
      },
      dataBackgroundColor: {
        type: String,
        default: 'green',
      },
    },
    data() {
      return {
        title: 'blog-table',
        items: [],
      };
    },
    created() {
      axios.get(this.$hostname + 'blog-posts')
        .then(response => {
          this.items = response.data.data
        })
        .catch(() => {
          this.$emit('notification', 'warning', 'Server Error')
        })
    },
  };
</script>
