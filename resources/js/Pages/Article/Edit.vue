<template>
    <Layout>
        <div
            class="p-6 mt-8 w-[1000px] mx-auto bg-white rounded-xl shadow-md space-y-4"
        >
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold text-gray-700">
                    Article Edit Form
                </h2>

                <Link class="btn btn-info" href="/articles">Back</Link>
            </div>

            <form @submit.prevent="updateArticle()">
                <div class="form-control mb-4">
                    <label class="label" for="title">
                        <span class="label-text text-xl font-semibold"
                            >Article Title</span
                        >
                    </label>
                    <input
                        type="text"
                        id="name"
                        v-model="form.title"
                        placeholder="Enter article title"
                        class="input input-bordered w-full"
                    />
                    <!-- <span
                        v-if="form.errors.title"
                        class="text-error font-bold"
                        >{{ form.errors.title }}</span
                    > -->
                </div>

                <div class="form-control mb-4">
                    <label class="label" for="description">
                        <span class="label-text text-xl font-semibold"
                            >Description</span
                        >
                    </label>
                    <input
                        id="description"
                        v-model="form.description"
                        placeholder="Enter article description"
                        class="input input-bordered w-full"
                    />
                    <!-- <span
                        v-if="form.errors.description"
                        class="text-error font-bold"
                        >{{ form.errors.description }}</span
                    > -->
                </div>

                <div class="flex space-x-2">
                    <button type="submit" class="btn btn-primary w-full">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </Layout>
</template>

<script setup>
import Layout from "./../Components/Layout.vue";
import { useForm } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";

const props = defineProps({ article: Object });

const form = useForm({
    title: props.article.title,
    description: props.article.description,
});

const updateArticle = () => {
    form.put(`/articles/${props.article.id}`, {
        onSuccess: () => {
            alert("Article created successfully");
        },
    });
};
</script>

<style scoped></style>
