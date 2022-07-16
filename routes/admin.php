<?php

use App\Models\E_Tower\Slider;
use App\Models\E_Tower\Message;
use App\Models\E_Tower\Setting;
use App\Models\E_Tower\Facility;
use App\Models\E_Tower\PageDetail;

use App\Models\Website\HomeSlider;
use App\Models\Website\HomeLatestProject;
use App\Models\Website\AboutUsDetail;
use App\Models\Website\WhyChooseUs;
use App\Models\Website\Team;
use App\Models\Website\Partner;
use App\Models\Website\Project;
use App\Models\Website\Event;
use App\Models\Website\Exhibition;
use App\Models\Website\News;
use App\Models\Website\Career;
use App\Models\Website\ContactUs;
use App\Models\Website\ContactUsRequest;

use App\Http\Controllers\Admin\AdminLoginController;

use App\Http\Controllers\Admin\Website\HomeSlidersController;
use App\Http\Controllers\Admin\Website\HomeLatestProjectController;
use App\Http\Controllers\Admin\Website\AboutUsDetailsController;
use App\Http\Controllers\Admin\Website\WhyChooseUsController;
use App\Http\Controllers\Admin\Website\TeamController;
use App\Http\Controllers\Admin\Website\PartnersController;
use App\Http\Controllers\Admin\Website\ProjectsController;
use App\Http\Controllers\Admin\Website\EventsController;
use App\Http\Controllers\Admin\Website\ExhibitionsController;
use App\Http\Controllers\Admin\Website\NewsController;
use App\Http\Controllers\Admin\Website\CareersController;
use App\Http\Controllers\Admin\Website\ContactUsController;
use App\Http\Controllers\Admin\Website\ContactUsRequestsController;

use App\Http\Controllers\Admin\E_Tower\SliderController;
use App\Http\Controllers\Admin\E_Tower\SettingController;
use App\Http\Controllers\Admin\E_Tower\MessagesController;
use App\Http\Controllers\Admin\E_Tower\FacilitiesController;
use App\Http\Controllers\Admin\E_Tower\PageDetailController;



Route::group(['prefix' => 'udg'], function () {
    Route::get('sliders', function () {
        $homeSliders = HomeSlider::get();
        return view('admin.website.sliders.index', compact('homeSliders'));
    })->name('udg.sliders');
    Route::get('sliders/create', [HomeSlidersController::class, 'create'])->name('udg.create_slider');
    Route::post('sliders/store', [HomeSlidersController::class, 'store'])->name('udg.store_slider');
    Route::get('sliders/edit/{id}', [HomeSlidersController::class, 'edit'])->name('udg.edit_slider');
    Route::put('sliders/update/{id}', [HomeSlidersController::class, 'update'])->name('udg.update_slider');
    Route::delete('sliders/delete/{id}', [HomeSlidersController::class, 'delete'])->name('udg.delete_slider');


    Route::get('latest_project', function () {
        $homeLatestProject = HomeLatestProject::find(1);
        return view('admin.website.latest_project', compact('homeLatestProject'));
    })->name('udg.latest_project');
    Route::post('latest_project', [HomeLatestProjectController::class, 'update'])->name('udg.update_latest_project');

    Route::get('details', function () {
        $aboutUsDetail = AboutUsDetail::find(1);
        return view('admin.website.details', compact('aboutUsDetail'));
    })->name('udg.details');
    Route::post('details', [AboutUsDetailsController::class, 'update'])->name('udg.update_details');

    Route::get('why_choose_us', function () {
        $whyChooseUs = WhyChooseUs::get();
        return view('admin.website.why_choose_us.index', compact('whyChooseUs'));
    })->name('udg.why_choose_us');
    Route::get('why_choose_us/create', [WhyChooseUsController::class, 'create'])->name('udg.create_why_choose_us');
    Route::post('why_choose_us/store', [WhyChooseUsController::class, 'store'])->name('udg.store_why_choose_us');
    Route::get('why_choose_us/edit/{id}', [WhyChooseUsController::class, 'edit'])->name('udg.edit_why_choose_us');
    Route::put('why_choose_us/update/{id}', [WhyChooseUsController::class, 'update'])->name('udg.update_why_choose_us');
    Route::delete('why_choose_us/delete/{id}', [WhyChooseUsController::class, 'delete'])->name('udg.delete_why_choose_us');

    Route::get('team', function () {
        $team = Team::get();
        return view('admin.website.team.index', compact('team'));
    })->name('udg.team');
    Route::get('team/create', [TeamController::class, 'create'])->name('udg.create_team');
    Route::post('team/store', [TeamController::class, 'store'])->name('udg.store_team');
    Route::get('team/edit/{id}', [TeamController::class, 'edit'])->name('udg.edit_team');
    Route::put('team/update/{id}', [TeamController::class, 'update'])->name('udg.update_team');
    Route::delete('team/delete/{id}', [TeamController::class, 'delete'])->name('udg.delete_team');

    Route::get('partners', function () {
        $partners = Partner::get();
        return view('admin.website.partners.index', compact('partners'));
    })->name('udg.partners');
    Route::get('partners/create', [PartnersController::class, 'create'])->name('udg.create_partners');
    Route::post('partners/store', [PartnersController::class, 'store'])->name('udg.store_partners');
    Route::get('partners/edit/{id}', [PartnersController::class, 'edit'])->name('udg.edit_partners');
    Route::put('partners/update/{id}', [PartnersController::class, 'update'])->name('udg.update_partners');
    Route::delete('partners/delete/{id}', [PartnersController::class, 'delete'])->name('udg.delete_partners');

    Route::get('projects', function () {
        $projects = Project::get();
        return view('admin.website.projects.index', compact('projects'));
    })->name('udg.projects');
    Route::get('projects/create', [ProjectsController::class, 'create'])->name('udg.create_projects');
    Route::post('projects/store', [ProjectsController::class, 'store'])->name('udg.store_projects');
    Route::get('projects/edit/{id}', [ProjectsController::class, 'edit'])->name('udg.edit_projects');
    Route::put('projects/update/{id}', [ProjectsController::class, 'update'])->name('udg.update_projects');
    Route::delete('projects/delete/{id}', [ProjectsController::class, 'delete'])->name('udg.delete_projects');
    Route::get('projects/remove-image/{imageId}', [ProjectsController::class, 'removeImage'])->name('udg.remove_project_image');

    Route::get('events', function () {
        $events = Event::get();
        return view('admin.website.events.index', compact('events'));
    })->name('udg.events');
    Route::get('events/create', [EventsController::class, 'create'])->name('udg.create_events');
    Route::post('events/store', [EventsController::class, 'store'])->name('udg.store_events');
    Route::get('events/edit/{id}', [EventsController::class, 'edit'])->name('udg.edit_events');
    Route::put('events/update/{id}', [EventsController::class, 'update'])->name('udg.update_events');
    Route::delete('events/delete/{id}', [EventsController::class, 'delete'])->name('udg.delete_events');
    Route::get('events/remove-image/{imageId}', [EventsController::class, 'removeImage'])->name('udg.remove_event_image');

    Route::get('exhibitions', function () {
        $exhibitions = Exhibition::get();
        return view('admin.website.exhibitions.index', compact('exhibitions'));
    })->name('udg.exhibitions');
    Route::get('exhibitions/create', [ExhibitionsController::class, 'create'])->name('udg.create_exhibitions');
    Route::post('exhibitions/store', [ExhibitionsController::class, 'store'])->name('udg.store_exhibitions');
    Route::get('exhibitions/edit/{id}', [ExhibitionsController::class, 'edit'])->name('udg.edit_exhibitions');
    Route::put('exhibitions/update/{id}', [ExhibitionsController::class, 'update'])->name('udg.update_exhibitions');
    Route::delete('exhibitions/delete/{id}', [ExhibitionsController::class, 'delete'])->name('udg.delete_exhibitions');
    Route::get('exhibitions/remove-image/{imageId}', [ExhibitionsController::class, 'removeImage'])->name('udg.remove_exhibition_image');

    Route::get('news', function () {
        $news = News::get();
        return view('admin.website.news.index', compact('news'));
    })->name('udg.news');
    Route::get('news/create', [NewsController::class, 'create'])->name('udg.create_news');
    Route::post('news/store', [NewsController::class, 'store'])->name('udg.store_news');
    Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('udg.edit_news');
    Route::put('news/update/{id}', [NewsController::class, 'update'])->name('udg.update_news');
    Route::delete('news/delete/{id}', [NewsController::class, 'delete'])->name('udg.delete_news');

    Route::get('careers', function () {
        $careers = Career::get();
        return view('admin.website.careers.index', compact('careers'));
    })->name('udg.careers');
    Route::get('careers/{id}', [CareersController::class, 'show'])->name('udg.show_careers');
    Route::delete('careers/delete/{id}', [CareersController::class, 'delete'])->name('udg.delete_careers');

    Route::get('contact_us', function () {
        $contact_us = ContactUs::find(1);
        return view('admin.website.contact_us', compact('contact_us'));
    })->name('udg.contact_us');
    Route::post('contact_us', [ContactUsController::class, 'update'])->name('udg.update_contact_us');

    Route::get('contact_us_requests', function () {
        $contact_us_requests = ContactUsRequest::get();
        return view('admin.website.contact_us_requests.index', compact('contact_us_requests'));
    })->name('udg.contact_us_requests');
    Route::get('contact_us_requests/{id}', [ContactUsRequestsController::class, 'show'])->name('udg.show_contact_us_requests');
    Route::delete('contact_us_requests/delete/{id}', [ContactUsRequestsController::class, 'delete'])->name('udg.delete_contact_us_requests');

});

Route::group(['prefix' => 'e_tower'], function () {

    // settings
    Route::get('settings', function () {
        $setting = Setting::find(1);
        return view('admin.e-tower.settings', compact('setting'));
    })->name('e-tower.settings');
    Route::post('settings', [SettingController::class, 'update'])->name('e-tower.update_settings');
    
    // sliders
    Route::get('sliders', function () {
        $sliders = Slider::get();
        return view('admin.e-tower.sliders.index', compact('sliders'));
    })->name('e-tower.sliders');
    Route::get('sliders/create', [SliderController::class, 'create'])->name('e-tower.create_slider');
    Route::post('sliders/store', [SliderController::class, 'store'])->name('e-tower.store_slider');
    Route::delete('sliders/delete/{id}', [SliderController::class, 'delete'])->name('e-tower.delete_slider');
    
    // page details
    Route::get('page_details', function () {
        $pageDetail = PageDetail::find(1);
        return view('admin.e-tower.page_details', compact('pageDetail'));
    })->name('e-tower.page_details');
    Route::post('page_details', [PageDetailController::class, 'update'])->name('e-tower.update_page_details');
    
    // facilities
    Route::get('facilities', function () {
        $facilities = Facility::get();
        return view('admin.e-tower.facilities.index', compact('facilities'));
    })->name('e-tower.facilities');
    Route::get('facilities/create', [FacilitiesController::class, 'create'])->name('e-tower.create_facility');
    Route::post('facilities/store', [FacilitiesController::class, 'store'])->name('e-tower.store_facility');
    Route::get('facilities/edit/{id}', [FacilitiesController::class, 'edit'])->name('e-tower.edit_facility');
    Route::put('facilities/update/{id}', [FacilitiesController::class, 'update'])->name('e-tower.update_facility');
    Route::delete('facilities/delete/{id}', [FacilitiesController::class, 'delete'])->name('e-tower.delete_facility');
    
    // messages
    Route::get('messages', function () {
        $messages = Message::get();
        return view('admin.e-tower.messages.index', compact('messages'));
    })->name('e-tower.messages');
    Route::post('messages', [MessagesController::class, 'store'])->name('e-tower.store_message');
    Route::get('messages/view/{id}', [MessagesController::class, 'view'])->name('e-tower.view_message');
    Route::delete('messages/delete/{id}', [MessagesController::class, 'delete'])->name('e-tower.delete_message'); 
});

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

?>