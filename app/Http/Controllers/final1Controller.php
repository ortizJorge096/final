<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createfinal1Request;
use App\Http\Requests\Updatefinal1Request;
use App\Repositories\final1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class final1Controller extends AppBaseController
{
    /** @var  final1Repository */
    private $final1Repository;

    public function __construct(final1Repository $final1Repo)
    {
        $this->final1Repository = $final1Repo;
    }

    /**
     * Display a listing of the final1.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->final1Repository->pushCriteria(new RequestCriteria($request));
        $final1s = $this->final1Repository->all();

        return view('final1s.index')
            ->with('final1s', $final1s);
    }

    /**
     * Show the form for creating a new final1.
     *
     * @return Response
     */
    public function create()
    {
        return view('final1s.create');
    }

    /**
     * Store a newly created final1 in storage.
     *
     * @param Createfinal1Request $request
     *
     * @return Response
     */
    public function store(Createfinal1Request $request)
    {
        $input = $request->all();

        $final1 = $this->final1Repository->create($input);

        Flash::success('Final1 saved successfully.');

        return redirect(route('final1s.index'));
    }

    /**
     * Display the specified final1.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $final1 = $this->final1Repository->findWithoutFail($id);

        if (empty($final1)) {
            Flash::error('Final1 not found');

            return redirect(route('final1s.index'));
        }

        return view('final1s.show')->with('final1', $final1);
    }

    /**
     * Show the form for editing the specified final1.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $final1 = $this->final1Repository->findWithoutFail($id);

        if (empty($final1)) {
            Flash::error('Final1 not found');

            return redirect(route('final1s.index'));
        }

        return view('final1s.edit')->with('final1', $final1);
    }

    /**
     * Update the specified final1 in storage.
     *
     * @param  int              $id
     * @param Updatefinal1Request $request
     *
     * @return Response
     */
    public function update($id, Updatefinal1Request $request)
    {
        $final1 = $this->final1Repository->findWithoutFail($id);

        if (empty($final1)) {
            Flash::error('Final1 not found');

            return redirect(route('final1s.index'));
        }

        $final1 = $this->final1Repository->update($request->all(), $id);

        Flash::success('Final1 updated successfully.');

        return redirect(route('final1s.index'));
    }

    /**
     * Remove the specified final1 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $final1 = $this->final1Repository->findWithoutFail($id);

        if (empty($final1)) {
            Flash::error('Final1 not found');

            return redirect(route('final1s.index'));
        }

        $this->final1Repository->delete($id);

        Flash::success('Final1 deleted successfully.');

        return redirect(route('final1s.index'));
    }
}
