<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createprueba1Request;
use App\Http\Requests\Updateprueba1Request;
use App\Repositories\prueba1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class prueba1Controller extends AppBaseController
{
    /** @var  prueba1Repository */
    private $prueba1Repository;

    public function __construct(prueba1Repository $prueba1Repo)
    {
        $this->prueba1Repository = $prueba1Repo;
    }

    /**
     * Display a listing of the prueba1.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->prueba1Repository->pushCriteria(new RequestCriteria($request));
        $prueba1s = $this->prueba1Repository->all();

        return view('prueba1s.index')
            ->with('prueba1s', $prueba1s);
    }

    /**
     * Show the form for creating a new prueba1.
     *
     * @return Response
     */
    public function create()
    {
        return view('prueba1s.create');
    }

    /**
     * Store a newly created prueba1 in storage.
     *
     * @param Createprueba1Request $request
     *
     * @return Response
     */
    public function store(Createprueba1Request $request)
    {
        $input = $request->all();

        $prueba1 = $this->prueba1Repository->create($input);

        Flash::success('Prueba1 saved successfully.');

        return redirect(route('prueba1s.index'));
    }

    /**
     * Display the specified prueba1.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prueba1 = $this->prueba1Repository->findWithoutFail($id);

        if (empty($prueba1)) {
            Flash::error('Prueba1 not found');

            return redirect(route('prueba1s.index'));
        }

        return view('prueba1s.show')->with('prueba1', $prueba1);
    }

    /**
     * Show the form for editing the specified prueba1.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prueba1 = $this->prueba1Repository->findWithoutFail($id);

        if (empty($prueba1)) {
            Flash::error('Prueba1 not found');

            return redirect(route('prueba1s.index'));
        }

        return view('prueba1s.edit')->with('prueba1', $prueba1);
    }

    /**
     * Update the specified prueba1 in storage.
     *
     * @param  int              $id
     * @param Updateprueba1Request $request
     *
     * @return Response
     */
    public function update($id, Updateprueba1Request $request)
    {
        $prueba1 = $this->prueba1Repository->findWithoutFail($id);

        if (empty($prueba1)) {
            Flash::error('Prueba1 not found');

            return redirect(route('prueba1s.index'));
        }

        $prueba1 = $this->prueba1Repository->update($request->all(), $id);

        Flash::success('Prueba1 updated successfully.');

        return redirect(route('prueba1s.index'));
    }

    /**
     * Remove the specified prueba1 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prueba1 = $this->prueba1Repository->findWithoutFail($id);

        if (empty($prueba1)) {
            Flash::error('Prueba1 not found');

            return redirect(route('prueba1s.index'));
        }

        $this->prueba1Repository->delete($id);

        Flash::success('Prueba1 deleted successfully.');

        return redirect(route('prueba1s.index'));
    }
}
