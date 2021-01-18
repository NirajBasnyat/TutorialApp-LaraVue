<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class CreateSeriesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_create_a_series()
    {
        $this->isLoggedIn();

        Storage::fake(config('filesystems.default'));

        $file_path = 'series/' . Str::slug('Test title here') . '.png';

        $this->post('/admin/series', [
            'title' => 'Test title here',
            'description' => 'Fake description for test here',
            'image_url' => UploadedFile::fake()->image('image-from-disk.png')
        ])->assertRedirect();

        Storage::disk(config('filesystems.default'))->assertExists($file_path);

        $this->assertDatabaseHas('series', [
            'slug' => Str::slug('Test title here')
        ]);
    }

    /** @test */
    public function title_is_required()
    {
        $this->isLoggedIn();

        $this->post('/admin/series', [
            'description' => 'Fake description for test',
            'image_url' => UploadedFile::fake()->image('image-from-disk.png')
        ])->assertSessionHasErrors('title');
    }

    /** @test */
    public function description_is_required()
    {
        $this->isLoggedIn();

        $this->post('/admin/series', [
            'title' => 'title for test',
            'image_url' => UploadedFile::fake()->image('image-from-disk.png')
        ])->assertSessionHasErrors('description');
    }

    /** @test */
    public function image_is_required()
    {
        $this->isLoggedIn();
        $this->post('/admin/series', [
            'title' => 'title for test',
            'description' => 'Fake description for test',
        ])->assertSessionHasErrors('image_url');
    }

    /** @test */
    public function image_must_be_an_image()
    {
        $this->isLoggedIn();
        $this->post('/admin/series', [
            'title' => 'Test title',
            'description' => 'Fake description for test',
            'image_url' => 'WRONG IMAGE FORMAT'
        ])->assertSessionHasErrors('image_url');
    }

    /** @test */
    public function only_admin_can_create_series()
    {
        $this->actingAs(User::factory()->create())->post('/series/create')
            ->assertStatus(404);
    }
}
