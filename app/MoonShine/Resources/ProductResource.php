<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\Number;
use MoonShine\Fields\Image;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Продукты';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [

                ID::make()
                ->sortable(),

            Grid::make([
                Column::make([
                    Text::make(('Название товара'), 'name')
                        ->sortable()
                        ->locked()
                        ->required(),

                    Textarea::make(('Описание товара'), 'desc')
                        ->sortable()
                        ->hideOnIndex()
                        ->nullable(),
                ])->columnSpan(8),

                Column::make([
                    Image::make(('Картинка товара'), 'img')
                        ->disk(config('moonshine.disk', 'public'))
                        ->dir('products_images')
                        ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif'])
                        ->nullable(),

                    Flex::make([
                        Number::make(('Цена товара'), 'price')
                            ->sortable()
                            ->locked()
                            ->min(0)
                            ->required(),

                        Number::make(('Количество на складе'), 'count')
                            ->sortable()
                            ->min(0),
                        ]),

                        BelongsTo::make('Категория товара', 'category'),

                    Switcher::make(__('Отображение на сайте'), 'active')
                        ->sortable()
                        ->updateOnPreview()
                        ->default(1),

                ])->columnSpan(4)

                ]),


        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
