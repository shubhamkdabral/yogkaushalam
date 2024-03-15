<?php

namespace App\Nova;

use App\Enums\Roles;
use App\Enums\UserType;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Students extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Students>
     */
    public static $model = \App\Models\User::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email', 'Profession'
    ];

    public static function label()
    {
        return 'Students';
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->where(function ($query) {
            $query->where('role', 'user');
        });
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            // ID::make()->sortable(),

            // Gravatar::make()->maxWidth(50),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Number::make('Phone')
                ->rules('required'),

            Text::make('Profession')
                ->sortable()
                ->rules('required', 'max:255'),

            Number::make('Age')
                ->rules('required'),

            Text::make('Height')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Weight')
                ->sortable()
                ->rules('required', 'max:255'),

            Select::make('Role')
                ->rules('required')
                ->options([
                    Roles::ADMIN => Roles::ADMIN,
                    Roles::USER => Roles::USER,
                ])->sortable()->filterable(),

            Select::make('User Type')
                ->rules('required')
                ->options([
                    UserType::REGISTERED => UserType::REGISTERED,
                    UserType::ENQUIRY => UserType::ENQUIRY,
                ])->sortable()->filterable(),

            Select::make('Shift')
                ->rules('required')
                ->options([
                    'Morning' => 'Morning',
                    'Evening' => 'Evening',
                ])->sortable()->filterable(),

            Select::make('Gender')
                ->rules('required')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female',
                    'other' => 'Other',
                ])->sortable()->filterable(),

            Date::make('Date of Joining')
                ->rules('required')
                ->sortable()->filterable(),

            Trix::make('Health Condition / Medical History', 'medical_history')->alwaysShow(),
            Trix::make('Address')->alwaysShow(),

            Images::make('Profile Pic', 'profile-photo') // second parameter is the media collection name
                ->conversionOnIndexView('thumb') // conversion used to display the image
                ->rules('required'), // validation rules

            HasMany::make('Fees Month', 'fees', Fee::class),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
