


@if($battleField!=NULL && $battleField->getMyWarrior()!=NULL)

  <table width="100%">

      <tr>
      <td width="33%">
        <img src="{{ $battleField->getMyWarrior()->imageUrl }}" alt="{{ get_class ($battleField->getMyWarrior()) }}" style="width:300px;">
        <img src="{{ $battleField->getMyWarrior()->weapon->imageUrl }}" alt="Pan !" style="width:100px;">
        <progress class="nes-progress is-primary mt-3" value="{{ $battleField->getMyWarrior()->life }}" max="100"></progress>
      </td>

      @if($battleField->getOtherWarriors() != NULL)
          <td width="33%" align="center"><img src="vs.png" alt="VS" style="width:100px;"></td>
          <td width="33%">
            <table>
            @foreach ($battleField->getOtherWarriors() as $warrior)
              <tr>
                <td>
                  <a href="{{BattleField::getHost()}}?do=fight&p1={{$battleField->getMyWarrior()->name}}&p2={{$warrior->name}}">
                    <img src="{{ $warrior->imageUrl }}" alt="{{ get_class ($warrior) }}" style="width:100px">
                  </a>
                  <img src="{{ $warrior->weapon->imageUrl }}" alt="Pan !" style="width:30px;">
                <progress class="nes-progress is-primary mt-3" value="{{ $warrior->life }}" max="100"></progress>
                </td>
              </tr>
            @endforeach
            </table>
          </td>
      @endif
    </tr>
  </table>


@endif
