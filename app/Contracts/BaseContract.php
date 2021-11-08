<?php
namespace App\Contracts;
/**
 * Interface BaseContract
 * @package App\Contracts
 */

 interface BaseContract
 {
     /***
      * create a model instance
      *@param array $attributes
      *@return mixed
      */

      public function create(array $attributes);

      /*****
       * Update a model instance
       * @param array $attributes
       * @param int $id
       * @return mixed
       */

       public function update(array $attributes,int $id);

       /*******
        * Return all model rows
        *@param array $columns
        *@param string $orderBy
        *@param string $sortBy 
        *@param mixed
        */

        public function all($columns = array('*'),string $orderBy = 'id',string $sortBy = 'desc');

        /**
         * Find One by Id
         * @param int $id
         * @return mixed
         */

         public function find(int $id);

         /**
          * Find One By Id or Throw Exception
          *@param int $id
          *@return mixed
          */

          public function findOneOrFail(int $id);

          /**
           * Find Based on a diffrent column
           * @param array $data
           * @return mixed
           */

           public function findOneByOrFail(array $data);

           /**
            * Delete one by Id
            *@param int $id
            *@return mixed
            */

            public function delete(int $id);


 }
?>