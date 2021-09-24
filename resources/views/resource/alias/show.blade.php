<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl">
            {{ __('Dossier: '.$alias->name) }}
        </h2>
    </x-slot>

    <hr/>
    <div class="py-6">
        <div class="sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div>
                    <h3 class="text-xl text-brand mb-2"><i class="icon-address-book"></i>&nbsp;Personal Contact Information</h3>
                    <ul>
                        <x-list-item-bolded label="Name: " :value="$alias->name"/>
                        <x-list-item-bolded label="Email: " :value="$alias->email"/>
                        <x-list-item-bolded label="Phone: " :value="$alias->phone"/>
                        <x-list-item-bolded label="Address: " :value="$alias->address" labelClasses="block"/>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl text-brand mb-2"><i class="icon-credit-card"></i>&nbsp;Payment Information</h3>
                    <ul>
                        <x-list-item-bolded label="Type: " :value="$alias->cc_type"/>
                        <x-list-item-bolded label="Number: " :value="$alias->cc_number"/>
                        <x-list-item-bolded label="Expiration: " value="{{ date('m/y', strtotime($alias->cc_expiration)) }}"/>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl text-brand mb-2"><i class="icon-office"></i>&nbsp;Work Information</h3>
                    <ul>
                        <x-list-item-bolded label="Company Name: " :value="$alias->company"/>
                        <x-list-item-bolded label="Job Title: " :value="$alias->job_title"/>
                        <x-list-item-bolded label="Work Email: " :value="$alias->company_email"/>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl text-brand mb-2"><i class="icon-display"></i>&nbsp;Internet Identity</h3>
                    <ul>
                        <x-list-item-bolded label="Username: " :value="$alias->username"/>
                        <x-list-item-bolded label="Password: " :value="$alias->password"/>
                        <x-list-item-bolded label="IP Address: " :value="$alias->ip_address"/>
                        <x-list-item-bolded label="MAC Address: " :value="$alias->mac_address"/>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="py-6">
                    <h3 class="text-xl text-brand mb-2"><i class="icon-profile"></i>&nbsp;Profile</h3>
                    <p>
                        {{ $alias->profile }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
