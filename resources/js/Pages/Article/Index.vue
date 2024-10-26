<template>
    <div>
        <Layout>
            <div
                class="p-6 mt-8 w-[1000px] mx-auto bg-white rounded-xl shadow-md space-y-4"
            >
                <div class="flex justify-between">
                    <h2 class="text-2xl font-bold text-gray-700">
                        Article Index
                    </h2>

                    <Link
                        class="btn btn-success text-white"
                        href="/articles/create"
                        >Create Article</Link
                    >
                </div>

                <div class="overflow-x-auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="article in articles" :key="article.id">
                                <th>{{ article.id }}</th>
                                <td>{{ article.title }}</td>
                                <td>{{ article.description }}</td>
                                <td class="flex space-x-4">
                                    <Link
                                        :href="`/articles/${article.id}/edit`"
                                        as="button"
                                        type="button"
                                        ><i
                                            class="fa-regular fa-pen-to-square text-primary"
                                        ></i
                                    ></Link>

                                    <!-- Method 1 for Delete -->
                                    <!-- <form
                                        @submit.prevent="
                                            deleteArticle(article.id)
                                        "
                                    >
                                        <button>
                                            <i
                                                class="fa-solid fa-trash-can text-error"
                                            ></i>
                                        </button>
                                    </form> -->

                                    <!-- Method 2 for Delete -->
                                    <Link
                                        :href="`/articles/${article.id}`"
                                        method="delete"
                                        as="button"
                                        type="button"
                                    >
                                        <i
                                            class="fa-solid fa-trash-can text-error"
                                        ></i>
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </Layout>
    </div>
</template>

<script setup>
import Layout from "./../Components/Layout.vue";
import { Link, useForm } from "@inertiajs/vue3";

defineProps(["articles"]);

// Method 1 for DeleteArticle
// const form = useForm({});
// const deleteArticle = (id) => {
//     form.delete(`/articles/${id}`);
// };
</script>

<style scoped></style>
