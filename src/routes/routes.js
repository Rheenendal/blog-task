import DashboardLayout from "@/pages/Layout/DashboardLayout.vue";

import Blogs from "../pages/Blogs";

const routes = [
  {
    path: "/",
    component: DashboardLayout,
    redirect: "/blogs",
    children: [
      {
        path: "blogs",
        name: "Blogs",
        component: Blogs,
      },
    ],
  },
];

export default routes;
