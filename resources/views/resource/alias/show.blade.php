<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl">
            {{ __('Dossier: '.$alias->name) }}
        </h2>
    </x-slot>

    <hr/>
    <div class="relative">
        @if ($alias->burned)
            <div class="backdrop-filter backdrop-blur-[2px] h-full w-full absolute inset-0">
                <div class="text-brand font-bold text-7xl p-16 border-8 border-brand transform rotate-45 w-max h-auto absolute top-1/4 rounded-xl">
                    <i class="icon-fire mr-2"></i>BURNED
                </div>
            </div>
        @endif
        <div class="py-6 max-w-screen-lg">
            <div class="sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-xl text-brand mb-2"><i class="icon-address-book"></i>&nbsp;Personal Contact Information</h3>
                        <div class="table">
                            <x-list-item-bolded label="Name:" :value="$alias->name"/>
                            <x-list-item-bolded label="Email:" :value="$alias->email"/>
                            <x-list-item-bolded label="Phone:" :value="$alias->phone"/>
                            <x-list-item-bolded label="Address:" :value="$alias->address" labelClasses="block"/>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl text-brand mb-2"><i class="icon-credit-card"></i>&nbsp;Payment Information</h3>
                        <div class="table">
                            <x-list-item-bolded label="Type:" :value="$alias->cc_type"/>
                            <x-list-item-bolded label="Number:" :value="$alias->cc_number"/>
                            <x-list-item-bolded label="Expiration:" value="{{ date('m/y', strtotime($alias->cc_expiration)) }}"/>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl text-brand mb-2"><i class="icon-office"></i>&nbsp;Work Information</h3>
                        <div class="table">
                            <x-list-item-bolded label="Company:" :value="$alias->company"/>
                            <x-list-item-bolded label="Job Title:" :value="$alias->job_title"/>
                            <x-list-item-bolded label="Work Email:" :value="$alias->company_email"/>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl text-brand mb-2"><i class="icon-display"></i>&nbsp;Internet Identity</h3>
                        <div class="table">
                            <x-list-item-bolded label="Username:" :value="$alias->username"/>
                            <x-list-item-bolded label="Password:" :value="$alias->password"/>
                            <x-list-item-bolded label="IP Address:" :value="$alias->ip_address"/>
                            <x-list-item-bolded label="MAC Address:" :value="$alias->mac_address"/>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="py-6">
                        <h3 class="text-xl text-brand mb-2"><i class="icon-profile"></i>&nbsp;Profile</h3>
                        <div class="max-w-prose">
                            {{ $alias->profile }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
