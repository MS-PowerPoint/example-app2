<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Text;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Category>
 */
class CategoryResource extends ModelResource
{

    protected string $model = Category::class;

    public string $column = 'name';

    protected string $sortDirection = 'ASC';

    protected bool $isAsync = true;

    protected bool $createInModal = true;

    protected bool $editInModal = true;

    public function title(): string
    {
        return 'Категории';
    }


    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {

        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('название', 'name')
                    ->required(),

            ]),
        ];
    }

    /**
     * @param Category $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
