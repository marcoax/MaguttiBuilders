<?php

namespace magutti\MaguttiBuilders\Builders;

class ArticleBuilder extends LaraCmsBuilder
{
    /**
     * @return mixed
     */
    public  function menuItems(){
        return $this->published()->menu()
            ->with(['parentPage' => function($query) {
                $query->published()->menu();
            }])
            ->orderBy('sort','Asc');
    }

    /**
     * @param $id
     * @return ArticleBuilder
     */
    public function childrenMenu($id) {
        return $this->where('parent_id', $id)->where('top_menu', 1)->orderBy('sort', 'asc');
    }

    /**
     * @param string $id
     * @return ArticleBuilder
     */
    public function pageChildren($id = '') {
        return $this->where('parent_id', $id)->orderBy('sort', 'asc');
    }

    public function top() {
        return $this->where('parent_id', 0);
    }

    /**
     * @return ArticleBuilder
     */
    public function menu() {
        return $this->where('top_menu', 1);
    }
}
