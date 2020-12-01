<template>
	<div>
		<div class="flex items-center text-sm font-medium mb-5">
			<inertia-link
				class="text-blue-700 hover:text-blue-800 font-bold text-1xl focus:outline-none focus:underline transition duration-150 ease-in-out"
				:href="route(baseRoute.route)">
				{{ baseRoute.action === 'update' ? baseRoute.title : 'Добавить город' }}
			</inertia-link>
			<h1 class="font-bold text-2xl ml-2">
				<span class="text-indigo-400 font-medium">/</span>
				{{ baseRoute.action === 'update' ? item.name : 'Добавить город' }}
			</h1>
		</div>
		<div class="bg-white rounded shadow overflow-hidden max-w-4xl">
			<form @submit.prevent="submit">
				<div class="p-6 pb-0 flex flex-wrap">
					<jet-label for="name" value="Название"/>
					<jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus/>
					<jet-error :message="errors.name" class="mt-2"/>
				</div>
				<div class="p-6 pb-0">
					<jet-label for="city-from" value="Доступна доставка из города"/>
					<toggle-button v-model="form.from" name="city-from"/>
				</div>
				<div class="p-6 pb-4">
					<jet-label for="city-to" value="Доступна доставка до города"/>
					<toggle-button v-model="form.to" name="city-to"/>
				</div>
				<div class="px-8 py-4 bg-gray-100 border-t border-gray-200 flex items-center">
					<loading-button
						:loading="sending"
						class="btn-indigo ml-auto"
						type="submit"
					>Сохранить
					</loading-button>
				</div>
			</form>
		</div>
	</div>
</template>

<script>
import Layout from '@/Layouts/AppLayout';
import FormMixin from "@/Mixins/FormMixin";
import Icon from '@/Shared/Icon'
import LoadingButton from '@/Shared/LoadingButton'
import {ToggleButton} from 'vue-js-toggle-button'
import JetLabel from "@/Jetstream/Label";
import JetInput from "@/Jetstream/Input";
import JetError from "@/Jetstream/InputError";
import isObject from 'lodash/isObject'

export default {
	metaInfo() {
		return {title: this.item.name}
	},
	layout: Layout,
	mixins: [FormMixin],
	props: {
		errors: Object,
		item: Object,
		baseRoute: Object,
	},
	remember: 'form',
	components: {
		Icon,
		LoadingButton,
		ToggleButton,
		JetLabel,
		JetInput,
		JetError
	},
	data() {
		let data = {};
		Object.keys(this.item).forEach(key => {
			if (!isObject(data[key])) {
				data[key] = this.item[key];
			}
		})
		return {
			sending: false,
			form: data,
		}
	},
	methods: {},
}
</script>
