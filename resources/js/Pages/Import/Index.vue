<template>
	<div>
		<h1 class="mb-8 font-bold text-3xl">Импорт тарифной сетки из файла</h1>
		<div class="bg-white rounded shadow overflow-hidden max-w-4xl">
			<form @submit.prevent="submit">
				<div class="p-4 pb-0 flex flex-wrap">
					<jet-label for="weight_from" value="Файл для импорта"/>
					<input
						id="file"
						type="file"
						class="mt-1 block w-full"
						ref="file"
						autofocus
						@input="importForm.file = $event.target.files[0]"
					/>
					<jet-error :message="errors.file" class="mt-2"/>
				</div>
				<div class="px-8 py-4 bg-gray-100 border-t border-gray-200 flex items-center">
					<loading-button
						:loading="sending"
						class="btn-indigo ml-auto"
						type="submit"
					>Импортировать
					</loading-button>
				</div>
			</form>
		</div>
	</div>
</template>

<script>
import Layout from '@/Layouts/AppLayout'
import LoadingButton from '@/Shared/LoadingButton';
import JetInput from "@/Jetstream/Input";
import JetLabel from "@/Jetstream/Label";
import JetError from "@/Jetstream/InputError";

export default {
	metaInfo: { title: 'Импорт' },
	layout: Layout,
	props: {
		errors: Object,
		baseRoute: Object,
	},
	remember: 'form',
	components: {
		LoadingButton,
		JetInput,
		JetLabel,
		JetError
	},
	data() {
		return {
			sending: false,
			importForm: this.$inertia.form({
				file: null,
			}),
		}
	},
	methods: {
		submit() {
			this.importForm.post(this.route(this.baseRoute.route + '.' + this.baseRoute.action), {
				forceFormData: true,
				onStart: () => this.sending = true,
				onFinish: () => this.sending = false,
			})
		},
	}
}
</script>
