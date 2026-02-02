<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageResizer;

class ProfileService
{
    use ImageResizer;

    public function updateOrCreateProfile(array $data, int $userId, $image = null): string
    {
        $profile = Profile::where('user_id', $userId)->first();

        if ($profile) {
            if ($profile->image && file_exists(public_path($profile->image))) {
                unlink(public_path($profile->image));
            }

            $profile->update($data);

            if ($image) {
                $result = $this->resizeAndSaveImage($image, 292, 292, 'images/profile');
                $profile->image = $result['path'];
                $profile->save();
            }

            return 'Profile updated successfully!';
        } else {
            $data['user_id'] = $userId;
            $profile = Profile::create($data);

            if ($image) {
                $result = $this->resizeAndSaveImage($image, 292, 292, 'images/profile');
                $profile->image = $result['path'];
                $profile->save();
            }

            return 'Profile created successfully!';
        }
    }
}

// এই প্রজেক্ট টা লাইভ সার্ভার এ আপলোড করলে এই কোড হবে। আর লোকাল এ ব্যবহার হলে উপর এর কোড কাজ করবে। 

// আর এই কমান্ড চালাতে হবে ::  php artisan storage:link

// namespace App\Services;

// use App\Models\Profile;
// use App\Traits\ImageResizer;

// class ProfileService
// {
//     use ImageResizer;

//     public function updateOrCreateProfile(array $data, int $userId, $image = null): string
//     {
//         $profile = Profile::where('user_id', $userId)->first();

//         if ($profile) {
//             if ($profile->image) {
//                 $basePublicPath = realpath(base_path('../public_html'));
//                 $imagePath = $basePublicPath . '/' . $profile->image;

//                 if (file_exists($imagePath)) {
//                     unlink($imagePath);
//                 }
//             }

//             $profile->update($data);

//             if ($image) {
//                 $result = $this->resizeAndSaveImage($image, 292, 292, 'images/profile');
//                 $profile->image = $result['path'];
//                 $profile->save();
//             }

//             return 'Profile updated successfully!';
//         } else {
//             $data['user_id'] = $userId;
//             $profile = Profile::create($data);

//             if ($image) {
//                 $result = $this->resizeAndSaveImage($image, 292, 292, 'images/profile');
//                 $profile->image = $result['path'];
//                 $profile->save();
//             }

//             return 'Profile created successfully!';
//         }
//     }
// }