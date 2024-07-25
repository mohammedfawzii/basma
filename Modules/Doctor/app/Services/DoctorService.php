<?php

namespace Modules\Doctor\Services;

use Modules\Doctor\Http\Requests\CreateDoctorRequest;

class DoctorService
{
    public function store(CreateDoctorRequest $request)
    {


        if ($validator->fails()) {
            throw new ValidationException($validator->errors());
        }

        $doctor = Doctor::create($data);

        // Handle image upload if provided
        if (isset($data['img'])) {
            // Implement image upload logic here
        }

        return $doctor;
    }

    public function update(Doctor $doctor, array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'img' => 'nullable|image', // Adjust validation rules as needed
            'position' => 'required|string',
            'bio' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator->errors());
        }

        $doctor->update($data);

        // Handle image update if provided
        if (isset($data['img'])) {
            // Implement image update logic here
        }

        return $doctor;
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
    }
}
