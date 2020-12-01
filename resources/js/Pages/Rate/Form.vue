<template>
	<div>
		<div class="flex items-center text-sm font-medium mb-5">
			<inertia-link
				class="text-blue-700 hover:text-blue-800 font-bold text-1xl focus:outline-none focus:underline transition duration-150 ease-in-out"
				:href="route(baseRoute.route)">
				{{ baseRoute.title }}
			</inertia-link>
			<h1 class="font-bold text-2xl ml-2">
				<span class="text-indigo-400 font-medium">/</span>
				{{ baseRoute.action === 'update' ? 'Изменить' : 'Добавить Тариф' }}
			</h1>
		</div>
		<div class="bg-white rounded shadow overflow-hidden max-w-4xl">
			<form @submit.prevent="submit">
				<div class="p-4 pb-0">
					<jet-label for="city-from" value="Из города"/>
					<v-select v-model="form.city_from_id" name="city-from"
					          :options="formData.cityFrom"
					          label="name"
					          :reduce="item => item.id"
					></v-select>
					<jet-error :message="errors.city_from_id"></jet-error>
				</div>
				<div class="p-4 pb-0">
					<jet-label for="city-to" value="В город"/>
					<v-select v-model="form.city_to_id" name="city-to"
					          :options="formData.cityTo"
					          label="name"
					          :reduce="item => item.id"
					></v-select>
					<jet-error :message="errors.city_to_id"></jet-error>
				</div>
				<div class="p-4 pb-0 flex flex-wrap">
					<jet-label for="weight_from" value="Вес от"/>
					<jet-input id="weight_from" type="text" class="mt-1 block w-full" v-model="form.weight_from" autofocus/>
					<jet-error :message="errors.weight_from" class="mt-2"/>
				</div>
				<div class="p-4 pb-0 flex flex-wrap">
					<jet-label for="weight_to" value="Вес до"/>
					<jet-input id="weight_to" type="text" class="mt-1 block w-full" v-model="form.weight_to" autofocus/>
					<jet-error :message="errors.weight_to" class="mt-2"/>
				</div>
				<div class="p-4 pb-0 flex flex-wrap">
					<jet-label for="volume_from" value="Объем от"/>
					<jet-input id="volume_from" type="text" class="mt-1 block w-full" v-model="form.volume_from" autofocus/>
					<jet-error :message="errors.volume_from" class="mt-2"/>
				</div>
				<div class="p-4 pb-0 flex flex-wrap">
					<jet-label for="volume_to" value="Объем до"/>
					<jet-input id="volume_to" type="text" class="mt-1 block w-full" v-model="form.volume_to" autofocus/>
					<jet-error :message="errors.volume_to" class="mt-2"/>
				</div>
				<div class="p-4 flex flex-wrap">
					<jet-label for="price" value="Цена"/>
					<jet-input id="price" type="text" class="mt-1 block w-full" v-model="form.price" autofocus/>
					<jet-error :message="errors.price" class="mt-2"/>
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
import LoadingButton from '@/Shared/LoadingButton'
import JetInput from "@/Jetstream/Input";
import JetLabel from "@/Jetstream/Label";
import JetError from "@/Jetstream/InputError";
import vSelect from 'vue-select';

export default {
	metaInfo() {
		return {title: 'Добавить/Изменить'}
	},
	layout: Layout,
	mixins: [FormMixin],
	props: {
		errors: Object,
		item: Object,
		baseRoute: Object,
		formData: Object,
	},
	remember: 'form',
	components: {
		LoadingButton,
		JetInput,
		JetLabel,
		JetError,
		vSelect
	},
	data() {
		let data = {};
		Object.keys(this.item).forEach(key => data[key] = this.item[key]);
		return {
			sending: false,
			form: data,
		}
	},
	methods: {},
}
</script>
