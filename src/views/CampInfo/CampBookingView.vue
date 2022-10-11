<template>
  <Main></Main>
  <section class="page_section">
    <header class="project_header">
      <div class="header_left">
        <p class="router_name">{{ chtName }}</p>
      </div>
      <div class="header_right">
        <div class="breadcrumb">
          <p>{{ title }} > {{ chtName }}</p>
        </div>
      </div>
    </header>

    <div class="serch_bar">
      <input type="text" placeholder="搜尋" />
      <button>新增</button>
      <button>修改</button>
      <button>刪除</button>
    </div>

    <table>
      <tr class="table_title">
        <th v-for="item in titles" :key="item">
          {{ item }}
        </th>
      </tr>
    </table>
  </section>
</template>

<script>
// @ is an alias to /src
import Main from '@/components/Main.vue';

export default {
  name: 'HomeView',
  components: {
    Main,
  },
  data() {
    return {
      chtName: '營區預訂管理',
      title: '營區預訂',
      titles: [
        '預訂號碼',
        '會員編號',
        '會員ID',
        '營帳編號',
        '營帳類型編號',
        '付款方式',
        '付款狀態',
        '總金額',
        '入住日期',
        '退房日期',
        '詳細資訊',
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
@import '@/assets/Scss/Page/table.scss';
</style>
