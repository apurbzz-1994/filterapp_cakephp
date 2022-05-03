<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Movies Controller
 *
 * @property \App\Model\Table\MoviesTable $Movies
 * @method \App\Model\Entity\Movie[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MoviesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        //getting all the distinct movie years for to be displayed in the dropdown menu
        /**
         * note: keyfield: the actual value, ie year
         * valuefield: the stuff to be displayed in the dropdown
         */
        $years = $this->Movies->find('list', [
            'keyField' => 'year',
            'valueField' => 'year'
        ])->distinct(['year'])
        ->order(['year'=>'ASC'])
        ->toArray();

        // getting all the distinct genres for to be displayed in the dropdown
        $genres = $this->Movies->find('list', [
            'keyField' => 'genre',
            'valueField' => 'genre'
        ])->distinct(['genre'])->toArray();

        //================FILTER CODE=================================
        
        $movies = $this->Movies->find();

        //grabbing the year value stored in query string
        $filterYear = $this->request->getQuery('year');
        if(!empty($filterYear)){
            $movies->where([
                'year'=> $filterYear
                
            ]);
        }

        //grabbing the genre value stored in query string
        $filterGenre = $this->request->getQuery('genre');
        if(!empty($filterGenre)){
            $movies->where([
                'genre'=> $filterGenre
            ]);
        }

        //================FILTER CODE END=================================

        $movies = $this->paginate($movies);

        $this->set(compact('movies', 'years', 'genres'));
    }



    /**
     * View method
     *
     * @param string|null $id Movie id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movie = $this->Movies->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('movie'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movie = $this->Movies->newEmptyEntity();
        if ($this->request->is('post')) {
            $movie = $this->Movies->patchEntity($movie, $this->request->getData());
            if ($this->Movies->save($movie)) {
                $this->Flash->success(__('The movie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movie could not be saved. Please, try again.'));
        }
        $this->set(compact('movie'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Movie id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movie = $this->Movies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movie = $this->Movies->patchEntity($movie, $this->request->getData());
            if ($this->Movies->save($movie)) {
                $this->Flash->success(__('The movie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movie could not be saved. Please, try again.'));
        }
        $this->set(compact('movie'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Movie id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movie = $this->Movies->get($id);
        if ($this->Movies->delete($movie)) {
            $this->Flash->success(__('The movie has been deleted.'));
        } else {
            $this->Flash->error(__('The movie could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
