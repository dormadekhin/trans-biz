<template>
	<div class="bg-gray-100">
		<div class="md:flex md:flex-col">
			<div class="md:h-screen md:flex md:flex-col">
				<nav class="bg-white border-gray-100">
					<div class="md:flex md:flex-shrink-0">
						<div
							class="bg-blue-900 md:flex-shrink-0 md:w-56 px-6 py-4 flex items-center justify-between md:justify-center">
							<!-- Logo -->
							<div class="flex-shrink-0 flex items-center">
								<inertia-link :href="route('dashboard')">
									<jet-application-mark class="block h-9 w-auto"/>
								</inertia-link>
							</div>
						</div>
						<div
							class="bg-white border-b w-full p-4 md:py-0 text-sm md:text-md flex justify-end items-center">
							<!-- Primary Navigation Menu -->
							<div class="max-w-7xl px-4">
								<div class="flex justify-between h-16">
									<!-- Settings Dropdown -->
									<div class="hidden sm:flex sm:items-center sm:ml-6">
										<div class="ml-3 relative">
											<jet-dropdown align="right" width="48">
												<template #trigger>
													<button v-if="$page.jetstream.managesProfilePhotos"
													        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
														<img class="h-8 w-8 rounded-full object-cover"
														     :src="$page.user.profile_photo_url"
														     :alt="$page.user.name"/>
													</button>

													<button v-else
													        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
														<div>{{ $page.user.name }}</div>

														<div class="ml-1">
															<svg class="fill-current h-4 w-4"
															     xmlns="http://www.w3.org/2000/svg"
															     viewBox="0 0 20 20">
																<path fill-rule="evenodd"
																      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
																      clip-rule="evenodd"/>
															</svg>
														</div>
													</button>
												</template>

												<template #content>
													<!-- Account Management -->
													<div class="block px-4 py-2 text-xs text-gray-400">
														Manage Account
													</div>

													<jet-dropdown-link :href="route('profile.show')">
														Profile
													</jet-dropdown-link>

													<jet-dropdown-link :href="route('api-tokens.index')"
													                   v-if="$page.jetstream.hasApiFeatures">
														API Tokens
													</jet-dropdown-link>

													<div class="border-t border-gray-100"></div>


													<!-- Authentication -->
													<form @submit.prevent="logout">
														<jet-dropdown-link as="button">
															Logout
														</jet-dropdown-link>
													</form>
												</template>
											</jet-dropdown>
										</div>
									</div>
									<!-- Hamburger -->
									<div class="-mr-2 flex items-center sm:hidden">
										<button @click="showingNavigationDropdown = ! showingNavigationDropdown"
										        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
											<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
												<path
													:class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
													stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M4 6h16M4 12h16M4 18h16"/>
												<path
													:class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
													stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M6 18L18 6M6 6l12 12"/>
											</svg>
										</button>
									</div>
								</div>
							</div>

							<!-- Responsive Navigation Menu -->
							<div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}"
							     class="sm:hidden">
								<div class="pt-2 pb-3 space-y-1">
									<jet-responsive-nav-link :href="route('dashboard')"
									                         :active="route().current('dashboard')">
										Dashboard
									</jet-responsive-nav-link>
								</div>

								<!-- Responsive Settings Options -->
								<div class="pt-4 pb-1 border-t border-gray-200">
									<div class="flex items-center px-4">
										<div class="flex-shrink-0">
											<img class="h-10 w-10 rounded-full" :src="$page.user.profile_photo_url"
											     :alt="$page.user.name"/>
										</div>

										<div class="ml-3">
											<div class="font-medium text-base text-gray-800">{{ $page.user.name }}</div>
											<div class="font-medium text-sm text-gray-500">{{ $page.user.email }}</div>
										</div>
									</div>

									<div class="mt-3 space-y-1">
										<jet-responsive-nav-link :href="route('profile.show')"
										                         :active="route().current('profile.show')">
											Profile
										</jet-responsive-nav-link>

										<jet-responsive-nav-link :href="route('api-tokens.index')"
										                         :active="route().current('api-tokens.index')"
										                         v-if="$page.jetstream.hasApiFeatures">
											API Tokens
										</jet-responsive-nav-link>

										<!-- Authentication -->
										<form method="POST" @submit.prevent="logout">
											<jet-responsive-nav-link as="button">
												Logout
											</jet-responsive-nav-link>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<div class="md:flex md:flex-grow md:overflow-hidden">
					<main-menu :url="url()"
					           class="hidden md:block bg-blue-800 flex-shrink-0 w-56 overflow-y-auto"/>
					<div class="md:flex-1 p-4 md:overflow-y-auto" scroll-region>
						<main>
							<slot></slot>
						</main>
					</div>
				</div>
			</div>

			<portal-target name="modal" multiple>
			</portal-target>
		</div>
	</div>
</template>

<script>
import JetApplicationMark from '@/Jetstream/ApplicationMark'
import JetDropdown from '@/Jetstream/Dropdown'
import JetDropdownLink from '@/Jetstream/DropdownLink'
import JetNavLink from '@/Jetstream/NavLink'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
import MainMenu from "@/Shared/MainMenu";

export default {
	components: {
		JetApplicationMark,
		JetDropdown,
		JetDropdownLink,
		JetNavLink,
		JetResponsiveNavLink,
		MainMenu
	},

	data() {
		return {
			showingNavigationDropdown: false,
		}
	},

	methods: {
		switchToTeam(team) {
			this.$inertia.put(route('current-team.update'), {
				'team_id': team.id
			}, {
				preserveState: false
			})
		},

		logout() {
			axios.post(route('logout').url()).then(response => {
				window.location = '/';
			})
		},
		url() {
			return location.pathname.substr(1)
		},
	}
}
</script>
