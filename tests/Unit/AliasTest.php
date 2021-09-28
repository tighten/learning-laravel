<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class AliasTest extends TestCase
{
    /** @test */
    public function a_user_can_have_multiple_aliases()
    {
        User::factory()
            ->hasAliases(3)
            ->create();

        $this->assertDatabaseCount('aliases', 3);
    }

    /** @test */
    public function an_alias_can_be_burned()
    {
        $user = User::factory()
            ->hasAliases(1, [
                'burned' => 0,
            ])
            ->create();
        $alias = $user->aliases->first();

        $this->actingAs($user)->get('/aliases/' . $alias->id . '/burn');
        $this->assertDatabaseHas('aliases', [
                'id' => $alias->id,
                'user_id' => $alias->user_id,
                'name' => $alias->name,
                'email' => $alias->email,
                'phone' => $alias->phone,
                'address' => $alias->address,
                'cc_type' => $alias->cc_type,
                'cc_number' => $alias->cc_number,
                'cc_expiration' => $alias->cc_expiration,
                'company' => $alias->company,
                'job_title' => $alias->job_title,
                'company_email' => $alias->company_email,
                'username' => $alias->username,
                'password' => $alias->password,
                'ip_address' => $alias->ip_address,
                'mac_address' => $alias->mac_address,
                'profile' => $alias->profile,
                'burned' => 1,
            ]);
    }

    /** @test */
    public function a_user_can_view_their_aliases()
    {
        $user = User::factory()
            ->hasAliases(3)
            ->create();

        $this->actingAs($user)
            ->get('/aliases')
            ->assertViewHasAll(['rows' => $user->aliases()->paginate(10)]);
    }
}
