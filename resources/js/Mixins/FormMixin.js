export default {
	methods: {
		submit() {
			let method = this.baseRoute.action === 'update' ? 'put' : 'post';
			this.$inertia[method](this.route(this.baseRoute.route + '.' + this.baseRoute.action, this.item.id), this.form, {
				onStart: () => this.sending = true,
				onFinish: () => this.sending = false,
			})
		},

	},
};
